<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kota extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('kota');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM kota WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function insert($data) {
		$sql = "INSERT INTO kota VALUES('','" .$data['kota'] ."')";

		$result = $this->db->query($sql);

		return $result;
	}

	public function update($data) {
		$sql = "UPDATE kota SET nama='" .$data['kota'] ."' WHERE id='" .$data['id'] ."'";

		$result = $this->db->query($sql);

		return $result;
	}

	public function delete($id) {
		$sql = "DELETE FROM kota WHERE id='" .$id ."'";

		$result = $this->db->query($sql);

		return $result;
	}

	public function total_rows() {
		$data = $this->db->get('kota');

		return $data->num_rows();
	}
}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */