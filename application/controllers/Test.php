<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('objet_model');
	}

	public function test() {
		$this->load->view('login');
	}

	public function login() {
		$user = $this->user_model->check_user($this->input->post('email'), $this->input->post('password'));
		if (count($user) > 0) {
			$this->session->set_userdata('user', $user[0]);
			echo $this->session->user['email'];
		} else {
			redirect(base_url('login'));
		}
	}

    public function test_func(){
       $array=$this->objet_model->get_not_owned(3);
		echo var_dump($array);
    }
}	

