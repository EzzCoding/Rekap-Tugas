<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_nilai');
		$this->load->model('M_siswa');
		$this->load->model('M_mapel');
	}

	public function index($halaman = '') {
		$limit = 4;

		if ($halaman != '') {
			$offset = $halaman;
		} else {
			$offset = 0;
		}
		$data['data_nilai'] = $this->M_nilai->SELECT_ALL($limit, $offset);

		$this->load->library('pagination');
		
		$config['base_url'] = base_url('Nilai/index');
		$config['total_rows'] = $this->M_nilai->TOTAL_ROWS();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<div id="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active">';
		$config['cur_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		
		$data['pagging'] = $this->pagination->create_links();


		$data['judul'] = "Data Nilai";
		$this->load->view('header', $data);
		$this->load->view('nilai', $data);
	}

	public function hapusNilai($id) {
		$result = $this->M_nilai->DELETE($id);

		if ($result) {
			$result_n = $this->M_nilai->CUSTOM_DELETE('id_nilai', $id);
			redirect('nilai');
		}
	}

	public function updateNilai($id) {
		$data['data_siswa'] = $this->M_siswa->SELECT_ALL();
		$data['data_mapel'] = $this->M_mapel->SELECT_ALL();
		$data['data_nilai'] = $this->M_nilai->SELECT_BY_ID($id);

		$this->load->view('update_nilai', $data);
	}

	public function act_updateNilai() {
		$data = $this->input->post();

		$result = $this->M_nilai->UPDATE($data);

		if ($result) {
			redirect('nilai');
		}
	}

	public function tambahNilai() {
		$data['data_siswa'] = $this->M_siswa->SELECT_ALL();
		$data['data_mapel'] = $this->M_mapel->SELECT_ALL();

		$this->load->view('tambah_nilai', $data);
	}

	public function act_tambahNilai() {
		$data = $this->input->post();

		$result = $this->M_nilai->INSERT($data);

		if ($result) {
			redirect('nilai');
		}
	}
}

/* End of file Nilai.php */
/* Location: ./application/controllers/Nilai.php */