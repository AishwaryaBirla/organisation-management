<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	

	public function index()
	{
		$this->load->view('add_view');
	}
	public function form_validation()
	{

		echo "ok";
		$this->load->library('form_validation');
		$this->form_validation->set_rules("task","tasks",'required|alpha');
		if($this->form_validation->run())
		{
			$this->load->model("Add_model");
		}
		else
		{
			$this->index();

		}

	}

}