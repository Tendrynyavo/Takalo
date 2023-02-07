<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function index() {
		$this->load->view('admin_login');
	}

	public function check() {
		$user = $this->user_model->check_admin($this->input->post('email'), $this->input->post('password'));
		if (count($user) > 0) {
			$this->session->set_userdata('user', $user[0]);
			redirect(base_url('index.php/categorie/gestion'));
		} else {
			redirect(base_url('index.php/admin_login'));
		}
	}
}
