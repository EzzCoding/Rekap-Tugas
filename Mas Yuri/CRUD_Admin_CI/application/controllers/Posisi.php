<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_posisi');
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
		$this->form_validation->set_rules('posisi', 'posisi', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_posisi->insert($data);

			if ($result > 0) {
				$this->session->set_flashdata('msg', 'Data Posisi Berhasil ditambahkan');
				redirect('Posisi');
			} else {
				$this->session->set_flashdata('msg', 'Data Posisi Gagal ditambahkan');
				redirect('Posisi/tambah');
			}
		} else {
			$this->session->set_flashdata('msg', validation_errors());
			redirect('Posisi/tambah');
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
		$this->form_validation->set_rules('posisi', 'posisi', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_posisi->update($data);

			if ($result > 0) {
				$this->session->set_flashdata('msg', 'Data Posisi Berhasil diupdate');
				redirect('Posisi');
			} else {
				$this->session->set_flashdata('msg', 'Data Posisi Gagal diupdate');
				redirect('Posisi/update/' .$data['id']);
			}
		} else {
			$this->session->set_flashdata('msg', validation_errors());
			redirect('Posisi/update/' .$data['id']);
		}
	}

	public function delete($id) {
		$result = $this->M_posisi->delete($id);
		if ($result > 0) {
			$data['status'] = 'success';
			$this->session->set_flashdata('msg', 'Data Kota Berhasil dihapus');
		}
		redirect('Posisi');
	}
}

/* End of file Posisi.php */
/* Location: ./application/controllers/Posisi.php */