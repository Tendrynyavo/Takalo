<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index() {
		$this->load->view('login');
	}

	public function check() {
		$user = $this->user_model->check_user($this->input->post('email'), $this->input->post('password'));
		if (count($user) > 0) {
			$this->session->set_userdata('user', $user[0]);
			redirect(base_url('index.php/objet'));
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function deconnecte() {
		$this->session->unset_userdata('user');
		redirect(base_url('index.php/login'));
	}
}
