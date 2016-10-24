<?php namespace models\_model_auth;

	use _config\Config as Config;

	class Model_Auth extends Config {
		function __construct() {
			parent::__construct();

			$this->db = new Config();
		}

		public function LOGIN($data) {
			$this->db->select('*');
			$this->db->from('tb_author');
			$this->db->where($data);

			$data = $this->db->get();

			return $data;
		}
	}
?>