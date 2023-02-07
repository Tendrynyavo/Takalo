<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('categorie_model', 'categorie');
		$this->load->model('objet_model', 'objet');
	}

	public function index() {
		$data = [];
		$data['categories'] = $this->categorie->get_categorie();
		$data['objets'] = ($this->input->get('categorie') == null) ? $this->objet->get_by_id(1) : $this->objet->get_by_id($this->input->get('categorie'));
		$this->load->view('category', $data);
	}
}
