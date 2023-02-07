<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function get_cats() {
        $query = $this->db->query('SELECT * FROM categorie'); 
        return convert_to_array($query);
    }
}
?>