<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_kota');

		$this->userdata = $this->session->userdata('userdata');

		if ($this->session->userdata('status') == '') {
			redirect('Auth');
		}
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataKota'] 	= $this->M_kota->select_all();

		$data['page'] 		= "kota";
		$data['judul'] 		= "Data Kota";
		$data['deskripsi'] 	= "Manage Data Kota";
		$this->template->views('kota', $data);
	}

	public function tambah() {
		$data['userdata'] 	= $this->userdata;

		$data['page'] 		= "kota";
		$data['judul'] 		= "Data Kota";
		$data['deskripsi'] 	= "Tambah Data Kota";
		$this->template->views('tambahKota', $data);
	}

	public function prosesTambah() {
		$data 	= $this->input->post();
		$result = $this->M_kota->insert($data);

		if ($result) {
			redirect('Kota');
		}
	}

	public function update($id) {
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($id);
		$data['dataKota'] 	= $this->M_kota->select_by_id($id);

		$data['page'] 		= "kota";
		$data['judul'] 		= "Data Kota";
		$data['deskripsi'] 	= "Update Data Kota";

		$this->template->views('updateKota', $data);
	}

	public function prosesUpdate() {
		$data 	= $this->input->post();
		$result = $this->M_kota->update($data);

		if ($result) {
			redirect('Kota');
		}
	}

	public function delete($id) {
		$result = $this->M_kota->delete($id);
		if ($result) {
			redirect('Kota');
		}
	}
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */