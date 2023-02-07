<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_model extends CI_Model {

/// Fonction pour lister les catégories
    public function get_categorie() {
        $query = $this->db->query('SELECT * FROM categorie'); 
        return convert_to_array($query);
    }

/// Fonction pour chercher une catégorie à partir de son id
    public function get_by_id($id = 1) {
        $sql='SELECT * FROM categorie WHERE id = %d';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        return convert_to_array($query);
    }

/// Fonction pour créer une nouvelle catégorie
    public function new_categorie($nom){
        $sql='INSERT INTO categorie(nom) VALUES (%s)';
        $sql = sprintf($sql, $this->db->escape($nom));
        $query = $this->db->query($sql); 
    }

/// Fonction pour retirer une catégorie
    public function delete($nom){
        $sql='DELETE FROM categorie WHERE nom = %s';
        $sql = sprintf($sql, $this->db->escape($nom));
        $query = $this->db->query($sql); 
    }
}
?>