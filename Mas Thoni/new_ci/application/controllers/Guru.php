<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends Auth_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('M_guru');
	}

	public function index() {
		$data['judul'] = 'Menu Guru';
		$data['data_guru'] = $this->M_guru->getGuru();
		$this->load_template('guru/home', $data);
	}

	public function add_guru() {
		$data['judul'] = 'Tambah Guru';

		$this->load_template('guru/form_tambah_guru', $data);
	}

	public function act_tambah() {
		$this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('guru/add_guru');
		} else {
			$param = $this->input->post();
			$proses = $this->M_guru->act_tambah($param);

			if ($proses >= 0) {
				$this->session->set_flashdata('alert_msg', succ_msg('Guru berhasil diinputkan'));
				redirect('guru');
			} else {
				$this->session->set_flashdata('alert_msg', err_msg('Guru gagal diinputkan'));
				redirect('guru/add_guru');
			}
		}
	}

	public function edit($id) {
		$data['judul'] = "Edit Guru";
		$data['data_guru'] = $this->M_guru->getDetailGuru($id);

		$this->load_template('guru/form_edit_guru', $data);
	}

	public function act_edit() {
		$this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$param = $this->input->post();
			$proses = $this->M_guru->act_edit($param);

			if ($proses >= 0) {
				$this->session->set_flashdata('alert_msg', succ_msg('Guru berhasil diedit'));
				redirect('guru');
			} else {
				$this->session->set_flashdata('alert_msg', err_msg('Guru gagal diedit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id='') {
		$proses = $this->M_guru->act_hapus($id);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Guru berhasil dihapus'));
		} else {
			$this->session->set_flashdata('alert_msg', err_msg('Guru gagal dihapus'));
		}
		redirect('guru');
	}
}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */