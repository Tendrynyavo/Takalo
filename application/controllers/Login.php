<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function index() {
		$this->load->view('login');
	}

	public function check() {
		$user = $this->user_model->check_user($this->input->post('email'), $this->input->post('password'));
		if (count($user) > 0) {
			$this->session->set_userdata('user', $user[0]);
			echo $this->session->user['email'];
		} else {
			redirect(base_url('login'));
		}
	}

	public function loginAdmin() {
		$user = $this->user_model->check_admin($this->input->post('email'), $this->input->post('password'));
		if (count($user) > 0) {
			$this->session->set_userdata('user', $user[0]);
			echo $this->session->user['email'];
		} else {
			redirect(base_url('login'));
		}
	}
}
