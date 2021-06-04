<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add extends CI_Controller {

	
public function __construct() {
		parent::__construct();
		$this->load->model('Add_model');
	}

	public function index()
	{
		
		
		$data["fetch_data"]=$this->Add_model->fetch_data();
		$this->load->view('add_view',$data);
			
		if($this->input->post('add'))
		{
		$to=$this->input->post('ass_to');
		$tas=$this->input->post('task');
		$dl=$this->input->post('deadline');
		$st=$this->input->post('start');
		$re=$this->input->post('remark');

			$data=array(
				"ass_by" =>$this->session->userdata('username'),
				"ass_to" =>$to,
				"task" =>$tas,
				"status"=>'1',
				"deadline" =>$dl,
				"start" =>$st,
				"remark" =>$re,

			);
			
			$this->load->model("Add_model");
			$done=$this->Add_model->insert_data($data);
			if($done)
			{redirect(base_url()."Tasks");}
			else 
			{
				redirect(base_url()."Add");	
			}
	}
	else
	{

		echo "NO";
	}
}
	public function inserted()
	{

		$this->index();
	}

}