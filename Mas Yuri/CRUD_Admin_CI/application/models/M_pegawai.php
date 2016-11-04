<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {
	public function select_all($search = '') {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND (pegawai.nama LIKE '%{$search}%' OR kota.nama LIKE '%{$search}%')";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT pegawai.id AS id_pegawai, pegawai.nama AS nama_pegawai, pegawai.id_kota, pegawai.id_kelamin, pegawai.id_posisi, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kota = kota.id AND pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE pegawai SET nama='" .$data['nama'] ."', telp='" .$data['telp'] ."', id_kota=" .$data['kota'] .", id_kelamin=" .$data['jk'] .", id_posisi=" .$data['posisi'] ." WHERE id='" .$data['id'] ."'";

		$result = $this->db->query($sql);

		return $result;
	}

	public function delete($id) {
		$sql = "DELETE FROM pegawai WHERE id='" .$id ."'";

		$result = $this->db->query($sql);

		return $result;
	}

	public function insert($data) {
		$id = md5(DATE('ymdhms').rand());
		$sql = "INSERT INTO pegawai VALUES('{$id}','" .$data['nama'] ."','" .$data['telp'] ."'," .$data['kota'] ."," .$data['jk'] ."," .$data['posisi'] .",1)";

		$result = $this->db->query($sql);

		return $result;
	}

	public function total_rows() {
		$data = $this->db->get('pegawai');

		return $data->num_rows();
	}
}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */