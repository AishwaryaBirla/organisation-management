<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_model extends CI_Model {

	/*function check_user() {
		$this->db->select('*'); 
		$this->db->from('task'); 
		$this->db->where('ass_by', $ass_by);
		$this->db->where('ass_to', $ass_to); 
		$this->db->where('task', $task);
		$this->db->where('status', $status);
		$this->db->where('deadline', $deadline); 
		$this->db->where('start', $start);
		$this->db->where('remark', $remark);
		
		$query = $this->db->get(); 
		return $query;
	}*/
	function insert_data($data) {
		
		$this->db->insert("task",$data); 
		  
	}
	function fetch_data()
	{

		$query =$this->db->get("user_tb");
		return $query;
	}
	function fetch_info()
	{
		$query=$this->db->get("task");
		return $query;

	}
}
