<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$this->template->views('home');
	}

	public function about() {
		$this->template->views('about');
	}

	public function contact() {
		$this->template->views('contact');
	}

	public function content() {
		$this->template->views('content');
	}
}
