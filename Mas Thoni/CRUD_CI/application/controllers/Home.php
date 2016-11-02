<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mapel');
		$this->load->model('M_nilai');
	}

	public function index() {
		$data['data_nilai'] = [];
		$list_mapel = $this->M_mapel->SELECT_ALL();

		foreach ($list_mapel as $mapel) {
			$data['data_nilai'][$mapel->mapel] = [];
		}

		foreach ($list_mapel as $mapel) {
			$data['data_nilai'][$mapel->mapel] = $this->M_nilai->SELECT_ALL_BY_Mapel($mapel->id_mapel);
		}

		// $nilai = $this->M_nilai->getList();

		// $header = [];

		// for ($i=0; $i < count($nilai) ; $i++) { 
		// 	$before = @$nilai[$i-1]->mapel;
		// 	$now 	= @$nilai[$i]->mapel;

		// 	if ($now != $before) {
		// 		$header[] = $now;
		// 	}
		// }

		// $fix_data = [];

		// for ($i=0; $i < count($header) ; $i++) { 
			
		// 	for ($j=0; $j < count($nilai) ; $j++) {

		// 		if ($nilai[$j]->mapel == $header[$i] ) {
		// 		 	$fix_data[$header[$i]][] = [
		// 		 		'nama' => $nilai[$j]->nama,
		// 		 		'nilai' => $nilai[$j]->nilai
		// 			];
		// 		} 
				
		// 	}	

		// }
		
		// echo "<pre>";
		// print_r ($nilai);

		// print_r ($header);

		// print_r ($fix_data);
		// echo "</pre>";

		// $data['data_nilai'] = $fix_data;
		$data['judul'] = "Data Nilai Siswa";

		$this->load->view('header', $data);
		$this->load->view('home', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */