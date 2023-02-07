<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	public function index() {
		$data = [];
		$data['categories'] = $this->categorie->
		$this->load->view('category');
	}
}
