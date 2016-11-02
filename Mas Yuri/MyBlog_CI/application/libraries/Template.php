<?php
	class Template {
		protected $_ci;

		function __construct() {
			$this->_ci = &get_instance();
		}

		function views($template = NULL, $data = NULL) {
			if ($template != NULL) {
				$data['_body'] = $this->_ci->load->view($template, $data, TRUE);
				$data['_header'] = $this->_ci->load->view('_layout/header', $data, TRUE);
				$data['_sidebar'] = $this->_ci->load->view('_layout/sidebar', $data, TRUE);
				$data['_footer'] = $this->_ci->load->view('_layout/footer', $data, TRUE);

				echo $data['_template'] = $this->_ci->load->view('template', $data, TRUE);
			}
		}
	}
?>