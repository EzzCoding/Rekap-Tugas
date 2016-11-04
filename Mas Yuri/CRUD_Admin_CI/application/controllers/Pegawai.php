<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
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
		$data['userdata'] = $this->userdata;
		$data['dataPegawai'] = $this->M_pegawai->select_all();

		$data['page'] = "pegawai";
		$data['judul'] = "Data Pegawai";
		$data['deskripsi'] = "Manage Data Pegawai";
		$this->template->views('pegawai', $data);
	}

	// public function tampil() {
	// 	$this->status = $this->session->userdata('status');

	// 	if ($this->status != '') {
	// 		$data['dataPegawai'] = $this->M_pegawai->select_all();

	// 		$this->load->view('list_dataPegawai', $data);
	// 	} else {
	// 		redirect('Auth');
	// 	}
	// }

	public function tambah() {
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['userdata'] = $this->userdata;

		$data['page'] = "pegawai";
		$data['judul'] = "Data Pegawai";
		$data['deskripsi'] = "Tambah Data Pegawai";
		$this->template->views('tambahPegawai', $data);
	}

	public function prosesTambah() {
		$data = $this->input->post();
		$result = $this->M_pegawai->insert($data);

		if ($result) {
			redirect('Pegawai');
		}
	}

	public function update($id) {
		$id = trim($id);
		$data['dataPegawai'] = $this->M_pegawai->select_by_id($id);
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['userdata'] = $this->userdata;

		$data['page'] = "pegawai";
		$data['judul'] = "Data Pegawai";
		$data['deskripsi'] = "Update Data Pegawai";

		$this->template->views('updatePegawai', $data);
	}

	public function prosesUpdate() {
		$data = $this->input->post();
		$result = $this->M_pegawai->update($data);

		if ($result) {
			redirect('Pegawai');
		}
	}

	public function delete($id) {
		$result = $this->M_pegawai->delete($id);
		if ($result) {
			redirect('Pegawai');
		}
	}
	// public function detail($id) {
	// 	$id = trim($id);
	// 	$data['dataPegawai'] = $this->M_pegawai->select_by_id($id);

	// 	$this->load->view('detail', $data);
	// }
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */