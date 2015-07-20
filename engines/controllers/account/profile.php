<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
		$this->load->helper("profile_helper");
		$this->template->set_template("layouts/profile");
	}
	
	public function index(){
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect(base_url().'login', 'refresh');
			
		}else{
			
			$data["title"] = "HRA : : Profile";
			$this->template->content->view("account/profile",$data);
			$this->template->publish();
		}
	}
	
}