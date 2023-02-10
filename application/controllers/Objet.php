<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Check_session_user.php';

class Objet extends Check_session_user {

	public function __construct() {
		parent::__construct();
		$this->load->model('objet_model');
		$this->load->model('categorie_model');
	}

	public function index() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['objets'] = $this->objet_model->get_not_owned($this->session->user['id']);
        $data['content'] = 'liste_objet';
        $data['categories'] = $this->categorie_model->get_categorie();
		
        $this->load->view('template', $data);
	}

	public function search() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['objets'] = $this->objet_model->rechercher_objet($this->input->get('search'), $this->input->get('categorie'));
        $data['content'] = 'liste_objet';
        $data['categories'] = $this->categorie_model->get_categorie();
		
        $this->load->view('template', $data);
	}
	
    public function gestion() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['objets'] = $this->objet_model->get_by_id_user($this->session->user['id']);
        $data['content'] = 'gestion_objet';
        $data['categories'] = $this->categorie_model->get_categorie();
		
        $this->load->view('template', $data);
	}

    public function gerer() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['categories'] = $this->categorie_model->get_categorie();
        $data['error'] = $this->input->get('error');
        $objet = array(
            'id' => $this->input->get('id'),
            'nom' => $this->input->get('nom'),
            'prix' => $this->input->get('prix'),
            'descr' => $this->input->get('descr'),
            'photo' => $this->objet_model->get_photo_by_objet($this->input->get('id'))
        );
        $data['objet'] = ($data['error'] != null) ? $objet : $this->objet_model->get_by_id($this->input->get('id'));
        $data['content'] = 'modif_objet';
		
        $this->load->view('template', $data);
    }

    public function modifier() {
        /// Gerer les champs vides
        if ($this->input->post('nom') == "" || $this->input->post('prix') == "" || $this->input->post('descr') == "") {
            $text = base_url('index.php/objet/gerer') . "?error=Les champs ne doivent pas être vide&&nom=%s&&prix=%s&&descr=%s&&id=%d#form";
            $text = sprintf($text, $this->input->post('nom'), $this->input->post('prix'), $this->input->post('descr'), $this->input->post('id'));
            redirect($text);
        }
        
        $this->objet_model->modif_objet($this->input->post('nom'), $this->input->post('descr'), $this->input->post('prix'), $this->input->post('id'));
        redirect(base_url('index.php/objet/gestion'));
    }

    public function ajout() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['content'] = 'ajout_objet';
        $data['categories'] = $this->categorie_model->get_categorie();
        $this->load->view('template', $data);
    }

    public function filtre() {
        $data = array();
        $data['user'] = $this->session->user;
        $data['content'] = 'plus_moins';
        $data['pourcentage'] = $this->input->get('pourcentage') * 100;
        $data['objets'] = $this->objet_model->get_pourcentage($this->input->get('pourcentage'), $this->input->get('objet'), $this->session->user['id']);
        $data['categories'] = $this->categorie_model->get_categorie();
        $this->load->view('template', $data);
    }

    public function ajouter() {
        // load base_url
        $this->load->helper('url');
        // Check form submit or not
        if($this->input->post('upload') != NULL ) {
            $data = array();
            if(!empty($_FILES['file']['name'])) {
                // Set preference
                $config['upload_path'] = 'assets/img/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '100'; // max_size in kb
                $config['file_name'] = $_FILES['file']['name'];
                // Load upload library
                $this->load->library('upload',$config);
                // File upload
                if($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $this->objet_model->ajouter_objet($this->session->user['id'], $this->input->post('nom'), $this->input->post('descr'), $this->input->post('prix'), $filename);
                }
            }
        }
        redirect(base_url('index.php/objet'));
    }
}
