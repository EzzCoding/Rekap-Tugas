<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');

		$this->userdata = $this->session->userdata('userdata');

		if ($this->session->userdata('status') == '') {
			redirect('Auth');
		}

	}

	public function index() {
		$data['jml_pegawai'] 	= $this->M_pegawai->total_rows();
		$data['jml_posisi'] 	= $this->M_posisi->total_rows();
		$data['jml_kota'] 		= $this->M_kota->total_rows();
		$data['userdata'] 		= $this->session->userdata('userdata');
		
		$data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data CRUD";
		$this->template->views('home', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */