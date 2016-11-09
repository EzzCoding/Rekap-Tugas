<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
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
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pegawai->insert($data);

			if ($result > 0) {
				$this->session->set_flashdata('msg', 'Data Pegawai Berhasil ditambahkan');
				redirect('Pegawai');
			} else {
				$this->session->set_flashdata('msg', 'Data Pegawai Gagal ditambahkan');
				redirect('Pegawai/tambah');
			}
		} else {
			// $this->session->set_flashdata('data', $data);
			$this->session->set_flashdata('msg', validation_errors());
			redirect('Pegawai/tambah');
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
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pegawai->update($data);

			if ($result > 0) {
				$this->session->set_flashdata('msg', 'Data Pegawai Berhasil diupdate');
				redirect('Pegawai');
			} else {
				$this->session->set_flashdata('msg', 'Data Pegawai Gagal diupdate');
				redirect('Pegawai/update/' .$data['id']);
			}
		} else {
			// $this->session->set_flashdata('data', $data);
			$this->session->set_flashdata('msg', validation_errors());
			redirect('Pegawai/update/' .$data['id']);
		}
	}

	public function delete($id) {
		$result = $this->M_pegawai->delete($id);

		if ($result > 0) {
			$this->session->set_flashdata('msg', 'Data Pegawai Berhasil dihapus');
		}
		redirect('Pegawai');
	}
	// public function detail($id) {
	// 	$id = trim($id);
	// 	$data['dataPegawai'] = $this->M_pegawai->select_by_id($id);

	// 	$this->load->view('detail', $data);
	// }
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */