<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_posisi extends CI_Model {
	public function select_all() {
		$data = $this->db->get('posisi');

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM posisi WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function insert($data) {
		$sql = "INSERT INTO posisi VALUES('','" .$data['posisi'] ."')";

		$result = $this->db->query($sql);

		return $result;
	}

	public function update($data) {
		$sql = "UPDATE posisi SET nama='" .$data['posisi'] ."' WHERE id='" .$data['id'] ."'";

		$result = $this->db->query($sql);

		return $result;
	}

	public function delete($id) {
		$sql = "DELETE FROM posisi WHERE id='" .$id ."'";

		$result = $this->db->query($sql);

		return $result;
	}

	public function total_rows() {
		$data = $this->db->get('posisi');

		return $data->num_rows();
	}
}

/* End of file M_posisi.php */
/* Location: ./application/models/M_posisi.php */