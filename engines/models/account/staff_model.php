<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->config('ion_auth', TRUE);
		
		//initialize data
		$this->identity_column = $this->config->item('identity', 'ion_auth');
		$this->store_salt      = $this->config->item('store_salt', 'ion_auth');
		$this->salt_length     = $this->config->item('salt_length', 'ion_auth');
		$this->join			   = $this->config->item('join', 'ion_auth');
		
		//initialize hash method options (Bcrypt)
		$this->hash_method = $this->config->item('hash_method', 'ion_auth');
		$this->default_rounds = $this->config->item('default_rounds', 'ion_auth');
		$this->random_rounds = $this->config->item('random_rounds', 'ion_auth');
		$this->min_rounds = $this->config->item('min_rounds', 'ion_auth');
		$this->max_rounds = $this->config->item('max_rounds', 'ion_auth');
		
		//initialize our hooks object
		$this->_ion_hooks = new stdClass;

		//load the bcrypt class if needed
		if ($this->hash_method == 'bcrypt') {
			if ($this->random_rounds)
			{
				$rand = rand($this->min_rounds,$this->max_rounds);
				$params = array('rounds' => $rand);
			}
			else
			{
				$params = array('rounds' => $this->default_rounds);
			}

			$params['salt_prefix'] = $this->config->item('salt_prefix', 'ion_auth');
			$this->load->library('bcrypt',$params);
		}
		
	}
	
	public function getStaffProfileViewBasicDetailsDepartment($CURRENT_DEPARTMENT){
		$sql = "SELECT DEPARTMENT_ID,DEPARTMENT_NAME FROM H_DEPARTMENT
				WHERE DEPARTMENT_ID = '".$CURRENT_DEPARTMENT."'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	public function getStaffProfileViewBasicDetails($STAFF_ID){
		
		$sql = "SELECT COMPANY_ID,FULLNAME,FIRST_NAME,LAST_NAME,EMAIL,
				PHONE,PROFILE_REQUESTS,RECENT_ACTIVITIES,CURRENT_KPI,
				CURRENT_DEPARTMENT FROM STAFF
				WHERE STAFF_ID = '".$STAFF_ID."'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	/*public function getDefaultAttributesForCompanyStaffValues($DEFAULT_ATTRIBUTES_FOR_COMPANY,$STAFF_ID,$COMPANY_ID){
		
		$array = array();
		foreach($DEFAULT_ATTRIBUTES_FOR_COMPANY as $DAFC){
			$array[$DAFC["DISPLAY_NAME"]] = $this->_getTheAttributeValues($DAFC["ATTRIBUTE_ID"],$STAFF_ID,$COMPANY_ID);
		}
		return $array;
	}*/
	//get biodata attributes for the staff
	public function getAllBiodataAttributes($STAFF_ID,$COMPANY_ID){
		$array = array();
		$sql = "SELECT A.DISPLAY_NAME,A.ATTRIBUTE_ID,B.STRING_VALUE
				FROM H_ATTRIBUTE A
				LEFT  JOIN H_STAFF_ATTRIBUTE B ON A.ATTRIBUTE_ID = B.ATTRIBUTE_ID
				AND  B.STAFF_ID = '".$STAFF_ID."'
				WHERE A.COMPANY_ID = '".$COMPANY_ID."'  AND ATTRIBUTE_GROUP_ID = 1
				ORDER BY A.DISPLAY_NUMBER ASC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
		
		
	}
	public function getAllStaffFamily($STAFF_ID,$COMPANY_ID){
		
		$sql = "SELECT A.STAFF_FAMILY_FIRST_NAME, A.STAFF_FAMILY_LAST_NAME, A.IS_NEXT_OF_KIN, 
				A.STAFF_FAMILY_ADDRESS, A.STAFF_FAMILY_PHONE, A.STAFF_FAMILY_ID,B.DESCRIPTION,B.RELATIONSHIP_ID
				FROM  STAFF_FAMILY AS A LEFT JOIN STAFF_FAMILY_RELATIONSHIP AS B 
				ON A.STAFF_FAMILY_RELATIONSHIP = B.RELATIONSHIP_ID
				WHERE A.STAFF_ID = '".$STAFF_ID."' AND A.COMPANY_ID = '".$COMPANY_ID."'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}
	//get the default attributes
	public function getDefaultAttributesForCompanyStaffValues($STAFF_ID,$COMPANY_ID){
		$array = array();
		$sql = "SELECT TOP 6 A.DISPLAY_NAME,B.STRING_VALUE
				FROM H_ATTRIBUTE A
				LEFT  JOIN H_STAFF_ATTRIBUTE B ON A.ATTRIBUTE_ID = B.ATTRIBUTE_ID
				AND  B.STAFF_ID = '".$STAFF_ID."'
				WHERE A.IS_DEFAULT = 1
				AND A.COMPANY_ID = '".$COMPANY_ID."'
				ORDER BY A.DISPLAY_NUMBER ASC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		foreach($result as $res){
				$array[$res["DISPLAY_NAME"]] = $res["STRING_VALUE"];
		}
		return $array;
	}
	public function _getTheAttributeValues($ATTRIBUTE_ID,$STAFF_ID,$COMPANY_ID){
		
		$sql = "SELECT STRING_VALUE FROM H_STAFF_ATTRIBUTE
				WHERE STAFF_ID = '".$STAFF_ID."' AND ATTRIBUTE_ID = '".$ATTRIBUTE_ID."'
				AND COMPANY_ID = '".$COMPANY_ID."'";
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row["STRING_VALUE"];
	}
	
	public function is_time_locked_out($identity) {

		return $this->is_max_login_attempts_exceeded($identity) && $this->get_last_attempt_time($identity) > time() - $this->config->item('lockout_time', 'ion_auth');
	}
	/**
	 * Get number of attempts to login occured from given IP-address or identity
	 * Based on code from Tank Auth, by Ilya Konyukhov (https://github.com/ilkon/Tank-Auth)
	 *
	 * @param	string $identity
	 * @return	int
	 */
	function get_attempts_num($identity)
	{
        if ($this->config->item('track_login_attempts', 'ion_auth')) {
            $ip_address = $this->_prepare_ip($this->input->ip_address());
			$qres = $this->db->query("SELECT * FROM LOGIN_ATTEMPTS WHERE LOGIN = '".$identity."'");
            return $qres->num_rows();
        }
        return 0;
	}
	/**
	 * Get the time of the last time a login attempt occured from given IP-address or identity
	 *
	 * @param	string $identity
	 * @return	int
	 */
	public function get_last_attempt_time($identity) {
		if ($this->config->item('track_login_attempts', 'ion_auth')) {
			$ip_address = $this->_prepare_ip($this->input->ip_address());

			$qres = $this->db->query("SELECT MAX(time) FROM LOGIN_ATTEMPTS WHERE LOGIN = '".$identity."'");
			if($qres->num_rows() > 0) {
				$row = $qres->row_array();
				return $row["time"];
			}
		}

		return 0;
	}

	/**
	 * is_max_login_attempts_exceeded
	 * Based on code from Tank Auth, by Ilya Konyukhov (https://github.com/ilkon/Tank-Auth)
	 *
	 * @param string $identity
	 * @return boolean
	 **/
	public function is_max_login_attempts_exceeded($identity) {
		if ($this->config->item('track_login_attempts', 'ion_auth')) {
			$max_attempts = $this->config->item('maximum_login_attempts', 'ion_auth');
			if ($max_attempts > 0) {
				$attempts = $this->get_attempts_num($identity);
				return $attempts >= $max_attempts;
			}
		}
		return FALSE;
	}
	
	protected function _prepare_ip($ip_address) {
		//just return the string IP address now for better compatibility
		return $ip_address;
	}
	
	public function login($identity, $password, $remember=FALSE)
	{
		
		if (empty($identity) || empty($password))
		{
			$this->set_error('login_unsuccessful');
			return FALSE;
		}

		//$this->trigger_events('extra_where');
		
		//$query = $this->getStaffInTheDB('');
		$query = $this->db->query("SELECT COMPANY_ID,EMAIL, USERNAME, EMAIL, STAFF_ID, PASSWORD, IS_ACTIVE, LAST_LOGIN, FULLNAME,FIRST_NAME,LAST_NAME,DISPLAY_NAME,STAFF_NUMBER,PASSPORT_ATTACHMENT_URL FROM STAFF WHERE EMAIL = '".$identity."' OR PHONE = '".$identity."' ORDER BY STAFF_ID DESC");
		
		if($this->is_time_locked_out($identity))
		{
			//Hash something anyway, just to take up time
			//$this->hash_password($password);

			//$this->trigger_events('post_login_unsuccessful');
			//$this->set_error('login_timeout');

			return FALSE;
		}
		
		
		if ($query->num_rows() === 1)
		{
			
			$user = $query->row();
			
			
			$password = $this->hash_password_db($user->STAFF_ID, $password);
			
			
			if ($password === TRUE)
			{
				
				if ($user->IS_ACTIVE == 0)
				{
					//$this->trigger_events('post_login_unsuccessful');
					//$this->set_error('login_unsuccessful_not_active');

					return FALSE;
				}

				$this->set_session($user);
				

				$this->update_last_login($user->STAFF_ID);

				$this->clear_login_attempts($identity);

				/*if ($remember && $this->config->item('remember_users', 'ion_auth'))
				{
					$this->remember_user($user->STAFF_ID);
				}

				$this->trigger_events(array('post_login', 'post_login_successful'));
				$this->set_message('login_successful');*/

				return TRUE;
			}
		}

		//Hash something anyway, just to take up time
		//$this->hash_password($password);

		$this->increase_login_attempts($identity);

		//$this->trigger_events('post_login_unsuccessful');
		///$this->set_error('login_unsuccessful');

		return FALSE;
	}
	
	/**
	 * increase_login_attempts
	 * Based on code from Tank Auth, by Ilya Konyukhov (https://github.com/ilkon/Tank-Auth)
	 *
	 * @param string $identity
	 **/
	public function increase_login_attempts($identity) {
		if ($this->config->item('track_login_attempts', 'ion_auth')) {
			$ip_address = $this->_prepare_ip($this->input->ip_address());
			//return $this->db->insert($this->tables['login_attempts'], array('ip_address' => $ip_address, 'login' => $identity, 'time' => time()));
			return $this->db->query("INSERT INTO LOGIN_ATTEMPTS (IP_ADDRESS, LOGIN, TIME) VALUES ('::1', '".$identity."', '".date('Y-m-d H:i:s', time())."')");
		}
		return FALSE;
	}
	
	/**
	 * This function takes a password and validates it
	 * against an entry in the users table.
	 *
	 * @return void
	 * @author Mathew
	 **/
	public function hash_password_db($id, $password, $use_sha1_override=FALSE)
	{
		if (empty($id) || empty($password))
		{
			return FALSE;
		}

		//$this->trigger_events('extra_where');

		/*$query = $this->db->query('password, salt')
		                  ->where('id', $id)
		                  ->limit(1)
		                  ->order_by('id', 'desc')
		                  ->get($this->tables['staff']);*/
		$query = $this->db->query("SELECT PASSWORD, SALT FROM STAFF WHERE STAFF_ID = '".$id."' ORDER BY STAFF_ID DESC");
		$hash_password_db = $query->row();

		if ($query->num_rows() !== 1)
		{
			return FALSE;
		}

		// bcrypt
		if ($use_sha1_override === FALSE && $this->hash_method == 'bcrypt')
		{
			if ($this->bcrypt->verify($password,$hash_password_db->PASSWORD))
			{
				return TRUE;
			}

			return FALSE;
		}

		// sha1
		if ($this->store_salt)
		{
			$db_password = sha1($password . $hash_password_db->salt);
		}
		else
		{
			$salt = substr($hash_password_db->password, 0, $this->salt_length);

			$db_password =  $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
		}

		if($db_password == $hash_password_db->password)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	/**
	 * Generates a random salt value for forgotten passwords or any other keys. Uses SHA1.
	 *
	 * @return void
	 * @author Mathew
	 **/
	public function hash_code($password)
	{
		return $this->hash_password($password, FALSE, TRUE);
	}

	/**
	 * Generates a random salt value.
	 *
	 * Salt generation code taken from https://github.com/ircmaxell/password_compat/blob/master/lib/password.php
	 *
	 * @return void
	 * @author Anthony Ferrera
	 **/
	public function salt()
	{

		$raw_salt_len = 16;

 		$buffer = '';
        $buffer_valid = false;

        if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
            $buffer = mcrypt_create_iv($raw_salt_len, MCRYPT_DEV_URANDOM);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
            $buffer = openssl_random_pseudo_bytes($raw_salt_len);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && @is_readable('/dev/urandom')) {
            $f = fopen('/dev/urandom', 'r');
            $read = strlen($buffer);
            while ($read < $raw_salt_len) {
                $buffer .= fread($f, $raw_salt_len - $read);
                $read = strlen($buffer);
            }
            fclose($f);
            if ($read >= $raw_salt_len) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid || strlen($buffer) < $raw_salt_len) {
            $bl = strlen($buffer);
            for ($i = 0; $i < $raw_salt_len; $i++) {
                if ($i < $bl) {
                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                } else {
                    $buffer .= chr(mt_rand(0, 255));
                }
            }
        }

        $salt = $buffer;

        // encode string with the Base64 variant used by crypt
        $base64_digits   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $bcrypt64_digits = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $base64_string   = base64_encode($salt);
        $salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);

	    $salt = substr($salt, 0, $this->salt_length);


		return $salt;

	}
	
	/**
	 * Misc functions
	 *
	 * Hash password : Hashes the password to be stored in the database.
	 * Hash password db : This function takes a password and validates it
	 * against an entry in the users table.
	 * Salt : Generates a random salt value.
	 *
	 * @author Mathew
	 */

	/**
	 * Hashes the password to be stored in the database.
	 *
	 * @return void
	 * @author Mathew
	 **/
	public function hash_password($password, $salt=false, $use_sha1_override=FALSE)
	{
		if (empty($password))
		{
			return FALSE;
		}

		//bcrypt
		if ($use_sha1_override === FALSE && $this->hash_method == 'bcrypt')
		{
			return $this->bcrypt->hash($password);
		}


		if ($this->store_salt && $salt)
		{
			return  sha1($password . $salt);
		}
		else
		{
			$salt = $this->salt();
			return  $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
		}
	}
	
	/**
	 * set_session
	 *
	 * @return bool
	 * @author jrmadsen67
	 **/
	public function set_session($user)
	{

		//$this->trigger_events('pre_set_session');

		$session_data = array(
		    'identity'             => $user->{$this->identity_column},
		    'username'             => $user->USERNAME,
		    'email'                => $user->EMAIL,
		    'staff_id'              => $user->STAFF_ID, //everyone likes to overwrite id so we'll use user_id
		    'old_last_login'       => $user->LAST_LOGIN,
			'staff_number'       => $user->STAFF_NUMBER,
			'first_name'       => $user->FIRST_NAME,
			'last_name'       => $user->LAST_NAME,
			'fullname'       => $user->FULLNAME,
			'display_name'       => $user->DISPLAY_NAME,
			'company_id'       => $user->COMPANY_ID,
		);

		$this->session->set_userdata($session_data);

		//$this->trigger_events('post_set_session');

		return TRUE;
	}
	
	/**
	 * update_last_login
	 *
	 * @return bool
	 * @author Ben Edmunds
	 **/
	public function update_last_login($id)
	{
		//$this->trigger_events('update_last_login');

		$this->load->helper('date');

		//$this->trigger_events('extra_where');
		return $this->db->query("UPDATE STAFF SET LAST_LOGIN = '".time()."' WHERE STAFF_ID = '".$id."'");
		//$this->db->update($this->tables['STAFF'], array('LAST_LOGIN' => time()), array('STAFF_ID' => $id));

		//return $this->db->affected_rows() == 1;
	}
	
	/**
	 * clear_login_attempts
	 * Based on code from Tank Auth, by Ilya Konyukhov (https://github.com/ilkon/Tank-Auth)
	 *
	 * @param string $identity
	 **/
	public function clear_login_attempts($identity, $expire_period = 86400) {
		if ($this->config->item('track_login_attempts', 'ion_auth')) {
			$ip_address = $this->_prepare_ip($this->input->ip_address());

			//$this->db->where(array('ip_address' => $ip_address, 'login' => $identity));
			// Purge obsolete login attempts
			//$this->db->or_where('time < ', date('Y-m-d H:i:s', time() - $expire_period), FALSE);

			//return $this->db->delete($this->tables['login_attempts']);
			return $this->db->query("DELETE FROM LOGIN_ATTEMPTS WHERE LOGIN = '".$identity."' OR TIME < '".date('Y-m-d H:i:s', time() - $expire_period)."'");
		}
		return FALSE;
	}
	
	/**
	 * remember_user
	 *
	 * @return bool
	 * @author Ben Edmunds
	 **/
	public function remember_user($id)
	{
		//$this->trigger_events('pre_remember_user');

		if (!$id)
		{
			return FALSE;
		}

		$user = $this->user($id)->row();

		$salt = $this->salt();

		$this->db->update($this->tables['staff'], array('remember_code' => $salt), array('id' => $id));

		if ($this->db->affected_rows() > -1)
		{
			// if the user_expire is set to zero we'll set the expiration two years from now.
			if($this->config->item('user_expire', 'ion_auth') === 0)
			{
				$expire = (60*60*24*365*2);
			}
			// otherwise use what is set
			else
			{
				$expire = $this->config->item('user_expire', 'ion_auth');
			}

			set_cookie(array(
			    'name'   => $this->config->item('identity_cookie_name', 'ion_auth'),
			    'value'  => $user->{$this->identity_column},
			    'expire' => $expire
			));

			set_cookie(array(
			    'name'   => $this->config->item('remember_cookie_name', 'ion_auth'),
			    'value'  => $salt,
			    'expire' => $expire
			));

			$this->trigger_events(array('post_remember_user', 'remember_user_successful'));
			return TRUE;
		}

		$this->trigger_events(array('post_remember_user', 'remember_user_unsuccessful'));
		return FALSE;
	}
	
	/**
	 * user
	 *
	 * @return object
	 * @author Ben Edmunds
	 **/
	public function user($id = NULL)
	{
		//$this->trigger_events('user');

		//if no id was passed use the current users id
		$id || $id = $this->session->userdata('user_id');

		$this->limit(1);
		$this->order_by('STAFF_ID', 'desc');
		$this->where($this->tables['STAFF'].'.STAFF_ID', $id);

		$this->users();

		return $this;
	}

	
}