<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	function auth() {
		$username  = $this->input->post('username',TRUE);
		$password  = $this->input->post('password',TRUE);
		$result    = $this->Login_model->check_user($username, $password);
		if($result->num_rows() > 0) {
			$data  = $result->row_array();
			$name  = $data['username'];
			$email = $data['email'];
			$level = $data['level'];
			$fname = $data['fname'];
			$lname = $data['lname'];
			$dob = $data['dob'];
			$add = $data['address'];
			$sesdata = array(
				'username'  => $username,
				'email'	=> $email,
				'level' => $level,
				'fname' => $fname,
				'lname' => $lname,
				'dob' => $dob,
				'address' => $add,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($this->session->userdata('logged_in'))
				{redirect('Admin');
			}
		} else {
			echo "<script>alert('access denied');history.go(-1);</script>";
		}
		$this->load->view('login_view');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}
}
