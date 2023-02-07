<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_model extends CI_Model {

/// Fonction pour lister tous les objets
    public function get_objets() {
        $query = $this->db->query('SELECT * FROM objet'); 
        return convert_to_array($query);
    }

/// Fonction pour obtenir un objet par son id
    public function get_by_id($id='') {
        $sql='SELECT * FROM objet WHERE id = %d';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        return convert_to_array($query);
    }
    
/// Fonction pour modifier la catégorie d'un objet
    public function modif_categorie($id_categorie = '', $id_objet='') {
        $sql = 'UPDATE objet SET idCategorie = %d WHERE id = %d';
        $sql = sprintf($sql, $this->db->escape($id_categorie), $this->db->escape($id_objet));
        $query = $this->db->query($sql);
    }

/// Fonction pour modifier un objet
    public function modif_objet($id_categorie = '', $descr='', $prix='', $id_objet='') {
        $sql = 'UPDATE objet SET idCategorie = %d, descr = %s,  prix = %d WHERE id = %d';
        $sql = sprintf($sql, $this->db->escape($id_categorie), $this->db->escape($descr), $this->db->escape($prix), $this->db->escape($id_objet));
        $query = $this->db->query($sql);
    }    


/// Fonction ajouter un objet au site
    public function ajouter_objet($id_user='', $id_categorie='', $descr = '', $prix='') {
        $sql = 'INSERT INTO objet (idUser, idCategorie, descr, prix) VALUES (%s, %s, %s, %s)';
        $sql = sprintf($sql, $this->db->escape($id_user), $this->db->escape($id_categorie), $this->db->escape($descr), $this->db->escape($prix));
        $query = $this->db->query($sql);
    }
}
?>
