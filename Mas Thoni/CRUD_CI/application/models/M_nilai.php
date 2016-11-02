<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model {
	public function SELECT_ALL($limit='', $offset='') {
		$sql = "SELECT tb_nilai.id_nilai, tb_siswa.nama, tb_nilai.nilai, tb_mapel.mapel FROM tb_siswa, tb_mapel, tb_nilai WHERE tb_nilai.id_siswa = tb_siswa.id_siswa AND tb_nilai.id_mapel = tb_mapel.id_mapel LIMIT {$offset}, {$limit}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function SELECT_BY_ID($id) {
		$this->db->select('*');			
		$this->db->from('tb_nilai');
		$this->db->where('id_nilai', $id);

		$data = $this->db->get();

		return $data->row();
	}

	public function SELECT_ALL_BY_Mapel($id_mapel='') {
		$sql = "SELECT tb_siswa.nama, tb_nilai.nilai, tb_mapel.mapel FROM tb_siswa, tb_mapel, tb_nilai WHERE tb_nilai.id_siswa = tb_siswa.id_siswa AND tb_nilai.id_mapel = tb_mapel.id_mapel AND tb_nilai.id_mapel = {$id_mapel}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function INSERT($data) {
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->where('id_mapel', $data['id_mapel']);
		$data_duplikat = $this->db->get('tb_nilai');

		if ($data_duplikat->num_rows() == 0) {
			$result = $this->db->insert('tb_nilai', $data);
			return $result;
		} else {
			redirect('Nilai');
		}
	}

	public function DELETE($id) {
		$this->db->where("id_nilai", $id);
		$result = $this->db->delete("tb_nilai");

		return $result;
	}

	public function CUSTOM_DELETE($field, $value) {
		$this->db->where($field, $value);
		$result = $this->db->delete("tb_nilai");

		return $result;
	}

	public function UPDATE($data) {
		$id = $data['id_nilai'];
		$this->db->where("id_nilai", $id);
		$result = $this->db->update("tb_nilai", $data);

		return $result;
	}

	public function TOTAL_ROWS(){
		$data = $this->db->get('tb_nilai');

		return $data->num_rows();
	}
}

/* End of file M_nilai.php */
/* Location: ./application/models/M_nilai.php */