<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('signup');
	}

	public function insert() {
		$this->load->model('user_model');
		if ($this->input->post('password') != $this->input->post('password_repeat')) redirect(base_url('index.php/sign_up'));
		$this->user_model->sign_up($this->input->post('name'), $this->input->post('prenom'), $this->input->post('email'), $this->input->post('password'));
		redirect(base_url('index.php/login'));
	}
}
