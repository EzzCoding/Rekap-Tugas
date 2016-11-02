<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mapel');
		$this->load->model('M_nilai');
	}

	public function index() {
		$data['data_nilai'] = [];
		$list_mapel = $this->M_mapel->SELECT_ALL();

		foreach ($list_mapel as $mapel) {
			$data['data_nilai'][$mapel->mapel] = [];
		}

		foreach ($list_mapel as $mapel) {
			$data['data_nilai'][$mapel->mapel] = $this->M_nilai->SELECT_ALL_BY_Mapel($mapel->id_mapel);
		}

		$data['judul'] = "Data Nilai Siswa";

		$this->load->view('header', $data);
		$this->load->view('home', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */