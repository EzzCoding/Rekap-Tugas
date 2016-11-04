<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_auth');
	}
	
	public function index() {
		$session = $this->session->userdata('status');

		if ($session == '') {
			$this->load->view('login');
		} else {
			redirect('Home');
		}
	}

	public function login() {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$data = $this->M_auth->login($username, $password);

		if ($data == false) {
			redirect('Auth');
		} else {
			$session = [
				'userdata' => $data,
				'status' => "Loged in"
			];
			$this->session->set_userdata($session);
			redirect('Home');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Auth');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */