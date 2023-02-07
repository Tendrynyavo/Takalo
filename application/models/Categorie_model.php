<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_model extends CI_Model {
    public function get_categorie() {
        $query = $this->db->query('SELECT * FROM categorie'); 
        return convert_to_array($query);
    }

    public function get_by_id($id='') {
        $sql='SELECT * FROM categorie WHERE id = %d';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        return convert_to_array($query);
    }
}
?>