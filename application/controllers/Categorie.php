<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('categorie_model');
		$this->load->model('objet_model');
	}

	public function index() {
		$data = [];
		$data['categories'] = $this->categorie_model->get_categorie();
		$data['objets'] = ($this->input->get('categorie') == null) ? $this->objet_model->get_by_idcategorie(1) : $this->objet_model->get_by_idcategorie($this->input->get('categorie'));
		
		$this->load->view('category', $data);
	}

	public function update() {
		$data = [];
		$data['objet'] = $this->object_model->get_by_id($this->input->get('id'))[0];

		$this->load->view('categorisation', $data);
	}
}
