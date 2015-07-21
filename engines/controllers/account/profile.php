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
		$this->load->model("account/staff_model");
		
	}
	
	public function index(){
		$this->template->set_template("layouts/profile");
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
	
	public function biodata($STAFF_ID){
		
		$data["STAFF_ID"] = $STAFF_ID;
		$data["COMPANY_ID"] = $this->session->userdata("company_id");
		//get All the biodata attributes for the staff
		$data["BIODATA_ATTR"] = $this->staff_model->getAllBiodataAttributes($STAFF_ID,$data["COMPANY_ID"]);
		$data["FAMILY"] = $this->staff_model->getAllStaffFamily($STAFF_ID,$data["COMPANY_ID"]);
		$this->load->view('account/biodata',$data);
	}
	
	public function profile_biodata_partial(){
		$this->load->model("admin/attributes_model");
		$STAFF_ID = $this->input->get('id');
		$data = array();
		$data["STAFF_ID"]=$STAFF_ID;
		$data["BASIC_DETAILS"] = $this->staff_model->getStaffProfileViewBasicDetails($STAFF_ID);
		$data["H_DEPARTMENT"] = $this->staff_model->getStaffProfileViewBasicDetailsDepartment($data["BASIC_DETAILS"]["CURRENT_DEPARTMENT"]);
		//$data["DEFAULT_ATTRIBUTES_FOR_COMPANY"] = $this->attributes_model->getDefaultAttributesForCompany($data["BASIC_DETAILS"]["COMPANY_ID"]);
		//$data["DEFAULT_ATTRIBUTES_FOR_COMPANY_STAFF_VALUES"] = $this->staff_model->getDefaultAttributesForCompanyStaffValues($data["DEFAULT_ATTRIBUTES_FOR_COMPANY"],$STAFF_ID,$data["BASIC_DETAILS"]["COMPANY_ID"]);
		$data["DEFAULT_ATTRIBUTES_FOR_COMPANY_STAFF_VALUES"] = $this->staff_model->getDefaultAttributesForCompanyStaffValues($STAFF_ID,$data["BASIC_DETAILS"]["COMPANY_ID"]);
		$view = $this->load->view('partials/profile_biodata_partial',$data,TRUE);
		echo json_encode($view);
	}
	
}