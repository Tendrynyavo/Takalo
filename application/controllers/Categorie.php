<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('categorie_model');
	}

	public function index() {
		$data = [];
		$data['categories'] = $this->categorie_model->get_categorie();
		$data['objets'] = ($this->input->get('categorie') == null) ? $this->objet_model->get_by_idcategorie(1) : $this->objet_model->get_by_idcategorie($this->input->get('categorie'));
		
		$this->load->view('category', $data);
	}

	public function categoriser() {
		$data = [];
		$data['objet'] = $this->objet_model->get_by_id($this->input->get('id'));
		$data['categories'] = $this->categorie_model->get_categorie();
		
		$this->load->view('categorisation', $data);
	}

	public function update() {
		$this->objet_model->modif_categorie($this->input->post('categorie'), $this->input->post('objet'));
		redirect(base_url('index.php/categorie'));
	}
}
