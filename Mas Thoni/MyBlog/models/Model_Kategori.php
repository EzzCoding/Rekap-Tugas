<?php namespace models\_model_kategori;

	use _config\Config as Config;

	class Model_Kategori extends Config {
		function __construct() {
			parent::__construct();

			$this->db = new Config();
		}

		public function SELECT_ALL() {
			$this->db->select('*');			
			$this->db->from('tb_kategori');

			$data = $this->db->get();

			return $data;
		}

		public function SELECT_BY_ID($id) {
			$this->db->select('*');			
			$this->db->from('tb_kategori');
			$this->db->where('id_kategori', $id);

			$data = $this->db->get();

			return $data[0];
		}

		public function LIKE($search) {
			$this->db->select('*');
			$this->db->from('tb_kategori');
			$this->db->like('nama_kategori', $search);

			$data = $this->db->get();

			return $data;
		}

		public function INSERT($data) {
			$result = $this->db->insert('tb_kategori', $data);

			return $result;
		}

		public function DELETE($id) {
			$this->db->delete("tb_kategori");
			$this->db->where_delete("id_kategori", $id);

			$result = $this->db->getDelete();

			return $result;
		}

		public function UPDATE($data, $id) {
			$this->db->update("tb_kategori", $data);
			$this->db->where_update("id_kategori", $id);

			$result = $this->db->getUpdate();

			return $result;
		}
	}
?>