<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_posisi');

		$this->userdata = $this->session->userdata('userdata');

		if ($this->session->userdata('status') == '') {
			redirect('Auth');
		}
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataPosisi'] = $this->M_posisi->select_all();

		$data['page'] 		= "posisi";
		$data['judul'] 		= "Data Posisi";
		$data['deskripsi'] 	= "Manage Data Posisi";
		$this->template->views('posisi', $data);
	}

	public function tambah() {
		$data['userdata'] 	= $this->userdata;

		$data['page'] 		= "posisi";
		$data['judul'] 		= "Data Posisi";
		$data['deskripsi'] 	= "Tambah Data Posisi";
		$this->template->views('tambahPosisi', $data);
	}

	public function prosesTambah() {
		$data 	= $this->input->post();
		$result = $this->M_posisi->insert($data);

		if ($result) {
			redirect('Posisi');
		}
	}

	public function update($id) {
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($id);
		$data['dataPosisi'] = $this->M_posisi->select_by_id($id);

		$data['page'] 		= "posisi";
		$data['judul'] 		= "Data Posisi";
		$data['deskripsi'] 	= "Update Data Posisi";

		$this->template->views('updatePosisi', $data);
	}

	public function prosesUpdate() {
		$data 	= $this->input->post();
		$result = $this->M_posisi->update($data);

		if ($result) {
			redirect('Posisi');
		}
	}

	public function delete($id) {
		$result = $this->M_posisi->delete($id);
		if ($result) {
			redirect('Posisi');
		}
	}
}

/* End of file Posisi.php */
/* Location: ./application/controllers/Posisi.php */