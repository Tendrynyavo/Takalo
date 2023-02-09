<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_session_user extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->session->set_userdata('objet', array());
		if (!$this->session->has_userdata('user')) redirect(base_url('index.php/login'));
	}
}
