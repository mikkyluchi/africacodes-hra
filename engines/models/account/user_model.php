<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
	
	public function getUserDetails($email){
		$sql = "SELECT id,forgotten_password_code,phone FROM users WHERE email = '".$email."'";
		$query = $this->db->query($sql);
		return $query->row_array(); 
	}
	
	public function verifyUserPasscode($passcode){
		
		$sql = "SELECT id,forgotten_password_code,phone,email FROM users WHERE forgotten_password_code = '".$passcode."'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
}