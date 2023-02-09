<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Check_session_user.php';

class Echange extends CI_Controller {

	public function __construct() {
		parent::__construct();
        if (!$this->session->has_userdata('user')) redirect(base_url('index.php/login')); 
		$this->load->model('objet_model');
		$this->load->model('echange_model');
		$this->load->model('categorie_model');
	}

    public function index() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['id'] = $this->input->get('id');
        $data['categories'] = $this->categorie_model->get_categorie();
        $data['objet'] = $this->objet_model->get_by_id($data['id']);
        $objects = $this->objet_model->get_by_id_user($data['user']['id']);
        if (count($objects) <= 0) redirect(base_url('index.php/echange/no_objet'));
        $data['choix'] = ($this->input->get('choix') == null) ? $objects[0]['id'] : $this->input->get('choix');
        $data['objet_choice'] = $this->objet_model->get_by_id($data['choix']);
        $data['objets'] = $objects;
        $data['content'] = 'echanger_objet';
		
        $this->load->view('template', $data);
	}

    public function proposition() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['categories'] = $this->categorie_model->get_categorie();
        $data['propositions'] = $this->echange_model->get_dipo_by_user($this->session->user['id']);
        $data['content'] = 'proposition';
		
        $this->load->view('template', $data);
    }

    public function envoyer() {
        $ajouts = $this->session->objet;
        foreach ($ajouts as $ajout) {
            $this->echange_model->echanger($this->input->get('id'), $ajout);
        }
        redirect(base_url('index.php/objet'));
    }

    public function accepter() {
        $this->echange_model->accepter_echange($this->input->get('id'), $this->input->get('choice'), $this->input->get('user1'), $this->input->get('user2'));
        redirect(base_url('index.php/echange/proposition'));
    }
    
    public function refuser() {
        $this->echange_model->annuler($this->input->get('id'));
        redirect(base_url('index.php/echange/proposition'));
    }

    public function no_objet() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['categories'] = $this->categorie_model->get_categorie();
        $data['content'] = 'no_objet';
		
        $this->load->view('template', $data);
    }
    
    public function history() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['categories'] = $this->categorie_model->get_categorie();
        $data['histories'] = $this->echange_model->get_historique();
        $data['content'] = 'historique';
        
        $this->load->view('template', $data);
    }

    public function ajouter() {
        if (!$this->session->has_userdata('objet')) $this->session->set_userdata('objet', array());
        $ajout = $this->session->objet;
        $id = $this->input->get('id');
        if (!in_array($id, $ajout)) $ajout[] = $id;
        $this->session->set_userdata('objet', $ajout);
        redirect(base_url('index.php/echange?id='.$this->input->get('objet')));
    }

    public function afficher() {
        $data = array();
        $data['user'] = $this->session->user;
        if (!$this->session->has_userdata('objet')) $this->session->set_userdata('objet', array());
        $data['objets'] = $this->objet_model->get_objet_ajout($this->session->objet);
        $data['id'] = $this->input->get('objet');
        $data['content'] = 'liste_ajout';
        $data['categories'] = $this->categorie_model->get_categorie();
		
        $this->load->view('template', $data);
    }
}