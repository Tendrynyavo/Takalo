<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	public function __construct() {
		parent::__construct();
<<<<<<< HEAD
		$this->load->model('categorie_model', 'categorie');
		$this->load->model('objet_model', 'objet');
=======
		$this->load->model('categorie_model');
		$this->load->model('objet_model');
>>>>>>> cd00160068662a029e0ed2a8f595976939377d14
	}

	public function index() {
		$data = [];
<<<<<<< HEAD
		$data['categories'] = $this->categorie->get_categorie();
		$data['objets'] = ($this->input->get('categorie') == null) ? $this->objet->get_by_id(1) : $this->objet->get_by_id($this->input->get('categorie'));
=======
		$data['categories'] = $this->categorie_model->get_categorie();
		$data['objets'] = ($this->input->get('categorie') == null) ? $this->objet_model->get_by_idcategorie(1) : $this->objet_model->get_by_idcategorie($this->input->get('categorie'));
>>>>>>> cd00160068662a029e0ed2a8f595976939377d14
		$this->load->view('category', $data);
	}
}
