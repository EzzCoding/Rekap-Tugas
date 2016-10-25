<?php
	/**
	* 

	*/
	class Belajar extends CI_Controller {
		public function index() {
			$this->load->view('belajar');
		}

		public function formTambah() {
			$this->load->view('form_tambah');
		}

		public function tambahAngka($value1=0, $value2=0){
			$data['total'] = $value1 + $value2;

			$this->load->view('belajar', $data);
		}

		public function tambahData() {
			$data['nama'] = $this->input->post('nama');
			$data['alamat'] = $this->input->post('alamat');

			$this->load->view('form_tambah', $data);
		}
	}
?>