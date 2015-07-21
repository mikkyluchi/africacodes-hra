<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Profile Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/wotaman
	 *	- or -
	 * 		http://example.com/index.php/wotaman/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/nursery/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model("account/staff_model");
		
	}
	
	public function index(){
		
		$this->data['title'] = "HRA : : Login";
		
		//validate form input
		$this->form_validation->set_rules('identity', 'Email', 'required|trim|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{
			
			//check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');
			
			if ($this->staff_model->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				/*if (!$this->ion_auth->is_admin()){
					
					redirect(base_url().'account/wotaman', 'refresh');
				}else{
					
					redirect(base_url().'account/wotaman', 'refresh');
				}*/
				redirect(base_url().'staff/'.$this->session->userdata('staff_id'));
				
			}
			else
			{
				
				//if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			//the user is not logging in so display the login page
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			/*$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);*/
			
			$this->_render_page('auth/login', $this->data);
		}
	}
	
	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}
}