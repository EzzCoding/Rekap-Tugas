<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_kota');
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
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_kota->insert($data);

			if ($result > 0) {
				$this->session->set_flashdata('msg', 'Data Kota Berhasil ditambahkan');
				redirect('Kota');
			} else {
				$this->session->set_flashdata('msg', 'Data Kota Gagal ditambahkan');
				redirect('Kota/tambah');
			}
		} else {
			$this->session->set_flashdata('msg', validation_errors());
			redirect('Kota/tambah');
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
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_kota->update($data);

			if ($result > 0) {
				$this->session->set_flashdata('msg', 'Data Kota Berhasil diupdate');
				redirect('Kota');
			} else {
				$this->session->set_flashdata('msg', 'Data Kota Gagal diupdate');
				redirect('Kota/update/' .$data['id']);
			}
		} else {
			$this->session->set_flashdata('msg', validation_errors());
			redirect('Kota/update/' .$data['id']);
		}
	}

	public function delete($id) {
		$result = $this->M_kota->delete($id);
		if ($result > 0) {
			$data['status'] = 'success';
			$this->session->set_flashdata('msg', 'Data Kota Berhasil dihapus');
		}
		redirect('Kota');
	}
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */