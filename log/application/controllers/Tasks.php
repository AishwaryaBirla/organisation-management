<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) 
		{
			redirect('Login');
		}

		$this->load->database();
		$this->load->model('Add_model');

		$this->load->helper('url');
	}
	
	function index()
	{
		$data["fetch_info"]=$this->Add_model->fetch_info();
		$this->load->view('task_view',$data);

	}
}