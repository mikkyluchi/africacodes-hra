<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attributes_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	
	public function getDefaultAttributesForCompany($COMPANY_ID){
		
		$sql = "SELECT ATTRIBUTE_ID,ATTRIBUTE_NAME,DISPLAY_NAME FROM H_ATTRIBUTE
				WHERE COMPANY_ID = '".$COMPANY_ID."' AND IS_DEFAULT = 1";
		$query = $this->db->query($sql);
		return $this->_LimitTo($query->result_array(),6);
	}
	
	public function _LimitTo($array,$limit){
		
		$temp = array();
		if(sizeof($array) < $limit){
			return $array;
		}else{
			for($i = 0; $i <= $limit-1; $i++){
				array_push($temp,$array[$i]);
			}
			return $temp;
		}
	}
	
	public function _remakeArray($array){
		
		$remakeTemp = array();
		/*for($i = 0; $i <= sizeof($array); $i++){
			array_push($array[$i]["ATTRIBUTE_NAME"]);
			//$remakeTemp[$array[$i]["ATTRIBUTE_ID"]] = $array[$i]["ATTRIBUTE_NAME"];
		}*/
		return $array;
	}
}