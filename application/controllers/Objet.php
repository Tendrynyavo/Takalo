<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('objet_model');
		$this->load->library('session');
	}

	public function index() {
        $data = array();
        $data['objets'] = $this->objet_model->;
        $data['content'] = 'liste_objet';
		$this->load->view('login' $data);
	}
}
