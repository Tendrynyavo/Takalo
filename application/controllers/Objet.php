<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Check_session_user.php';

class Objet extends Check_session_user {

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
        $data['objets'] = $this->objet_model->get_by_id_user($this->session->user['id']);
        $data['content'] = 'gestion_objet';
		
        $this->load->view('template', $data);
	}

    public function gerer() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['objet'] = $this->objet_model->get_by_id($this->input->get('id'));
        $data['content'] = 'modif_objet';
		
        $this->load->view('template', $data);
    }

    public function modifier() {
        $this->objet_model->modif_objet($this->input->post('nom'), $this->input->post('descr'), $this->input->post('prix'), $this->input->post('id'));
        redirect(base_url('index.php/objet/gestion'));
    }
}
