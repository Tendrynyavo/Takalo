<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Check_session_user.php';

class Echange extends Check_session_user {

	public function __construct() {
		parent::__construct();
		$this->load->model('objet_model');
		$this->load->model('echange_model');
	}

    public function index() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['id'] = $this->input->get('id');
        $data['objet'] = $this->objet_model->get_by_id($data['id']);
        $objects = $this->objet_model->get_by_id_user($data['user']['id']);
        $data['choix'] = ($this->input->get('choix') == null) ? $objects[0]['id'] : $this->input->get('choix');
        $data['objet_choice'] = $this->objet_model->get_by_id($data['choix']);
        $data['objets'] = $objects;
        $data['content'] = 'echanger_objet';
		
        $this->load->view('template', $data);
	}

    public function proposition() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['propositions'] = $this->echange_model->get_dipo_by_user($this->session->user['id']);
        $data['content'] = 'proposition';
		
        $this->load->view('template', $data);
    }

    public function envoyer() {
        $this->echange_model->echanger($this->input->get('id'), $this->input->get('choix'));
        redirect(base_url('index.php/objet'));
    }
}