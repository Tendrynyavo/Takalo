<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index() {
		$this->load->view('admin_login');
	}

	public function check() {
		$user = $this->user_model->check_admin($this->input->post('email'), $this->input->post('password'));
		if (count($user) > 0) {
			$this->session->set_userdata('user_admin', $user[0]);
			redirect(base_url('index.php/categorie'));
		} else {
			redirect(base_url('index.php/admin'));
		}
	}

	public function deconnecte() {
		$this->session->unset_userdata('user_admin');
		redirect(base_url('index.php/admin'));
	}
}
