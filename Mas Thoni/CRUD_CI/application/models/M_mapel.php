<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model {
	public function SELECT_ALL($limit = '', $offset = '') {
		$this->db->limit($limit, $offset);
		$data = $this->db->get('tb_mapel');

		return $data->result();
	}

	public function SELECT_BY_ID($id) {
		$this->db->where('id_mapel', $id);
		$data = $this->db->get('tb_mapel');

		return $data->row();
	}

	public function INSERT($data) {
		$result = $this->db->insert('tb_mapel', $data);

		return $result;
	}

	public function DELETE($id) {
		$this->db->where("id_mapel", $id);
		$result = $this->db->delete("tb_mapel");

		return $result;
	}

	public function UPDATE($data) {
		$id = $data['id_mapel'];
		$this->db->where("id_mapel", $id);
		$result = $this->db->update("tb_mapel", $data);

		return $result;
	}

	public function TOTAL_ROWS(){
		$data = $this->db->get('tb_mapel');

		return $data->num_rows();
	}
}

/* End of file M_mapel.php */
/* Location: ./application/models/M_mapel.php */