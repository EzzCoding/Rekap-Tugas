<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {
	public function SELECT_ALL($limit = '', $offset = '') {
		$this->db->limit($limit, $offset);
		$data = $this->db->get('tb_siswa');

		return $data->result();
	}

	public function SELECT_BY_ID($id) {
		$this->db->where('id_siswa', $id);
		$data = $this->db->get('tb_siswa');

		return $data->row();
	}

	public function INSERT($data) {
		$result = $this->db->insert('tb_siswa', $data);

		return $result;
	}

	public function DELETE($id) {
		$this->db->where("id_siswa", $id);
		$result = $this->db->delete("tb_siswa");

		return $result;
	}

	public function UPDATE($data) {
		$id = $data['id_siswa'];
		$this->db->where("id_siswa", $id);
		$result = $this->db->update("tb_siswa", $data);

		return $result;
	}

	public function TOTAL_ROWS(){
		$data = $this->db->get('tb_siswa');

		return $data->num_rows();
	}
}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */