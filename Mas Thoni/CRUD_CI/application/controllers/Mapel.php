<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mapel');
	}

	public function index($halaman = '') {
		$limit = 4;

		if ($halaman != '') {
			$offset = $halaman;
		} else {
			$offset = 0;
		}
		$data['data_mapel'] = $this->M_mapel->SELECT_ALL($limit, $offset);

		$this->load->library('pagination');
		
		$config['base_url'] = base_url('Mapel/index');
		$config['total_rows'] = $this->M_mapel->TOTAL_ROWS();
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


		$data['judul'] = "Data Mata Pelajaran";
		$this->load->view('header', $data);
		$this->load->view('mapel', $data);
	}

	public function hapusMapel($id) {
		$result = $this->M_mapel->DELETE($id);

		if ($result) {
			redirect('mapel');
		}
	}

	public function updateMapel($id) {
		$data['data_mapel'] = $this->M_mapel->SELECT_BY_ID($id);

		$this->load->view('update_mapel', $data);
	}

	public function act_updateMapel() {
		$data = $this->input->post();

		$result = $this->M_mapel->UPDATE($data);

		if ($result) {
			redirect('mapel');
		}
	}

	public function tambahMapel() {
		$this->load->view('tambah_mapel');
	}

	public function act_tambahMapel() {
		$data = $this->input->post();

		$result = $this->M_mapel->INSERT($data);

		if ($result) {
			redirect('mapel');
		}
	}

}

/* End of file Mapel.php */
/* Location: ./application/controllers/Mapel.php */