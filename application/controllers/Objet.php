<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('objet_model');
	}

	public function index() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['objets'] = $this->objet_model->get_not_owned($this->session->user['id']);
        $data['content'] = 'liste_objet';
		$this->load->view('template', $data);
	}
	
    public function gestion() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['objets'] = $this->objet_model->get_by_id($this->session->user['id']);
        $data['content'] = 'gestion_objet';
		$this->load->view('template', $data);
	}
    
    public function echange() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['objets'] = $this->objet_model->get_by_id($this->session->user['id']);
        $data['content'] = 'gestion_objet';
		$this->load->view('template', $data);
	}


}
