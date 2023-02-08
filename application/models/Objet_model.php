<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_model extends CI_Model {

/// Fonction pour lister tous les objets
    public function get_objets() {
        $query = $this->db->query('SELECT * FROM objet'); 
        return convert_to_array($query);
    }

/// Fonction pour obtenir un objet par son id
    public function get_by_id($id = 1) {
        $sql='SELECT o.*, u.nom as user FROM objet o JOIN user u ON o.idUser=u.id WHERE o.id = %s';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        return $query->row();
    }

/// Fonction pour obtenir les photos d'un objet par son id
    public function get_photo() {
        $sql='SELECT * FROM photo p JOIN objet o ON p.idObjet=o.id';
        $query = $this->db->query($sql); 
        return $query->row();
    }

/// Fonction pour obtenir les photos d'un objet par son id
    public function get_photo_by_objet($id_objet = 1) {
        $sql='SELECT * FROM photo p JOIN objet o ON p.idObjet=o.id WHERE o.id=%s';
        $sql = sprintf($sql, $this->db->escape($id_objet));
        $query = $this->db->query($sql); 
        return $query->row();
    }

/// Fonction pour obtenir un objet par son id
    public function get_by_id_user($id = 1) {
        $sql='SELECT * FROM objet WHERE iduser = %s';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour obtenir les objet n'appartenat pas à un utilisateur en utilisant son id
    public function get_not_owned($id = 1) {
        $sql='SELECT * FROM objet WHERE NOT iduser = %s';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour obtenir un objet par son idcategorie
    public function get_by_idcategorie($id_categorie = 1) {
        $sql='SELECT * FROM objet WHERE idCategorie = %s';
        $sql = sprintf($sql, $this->db->escape($id_categorie));
        $query = $this->db->query($sql); 
        return $query->result_array();
    }
    
/// Fonction pour modifier la catégorie d'un objet
    public function modif_categorie($id_categorie = '', $id_objet='') {
        $sql = 'UPDATE objet SET idCategorie = %s WHERE id = %s';
        $sql = sprintf($sql, $this->db->escape($id_categorie), $this->db->escape($id_objet));
        $query = $this->db->query($sql);
    }

/// Fonction pour modifier un objet
    public function modif_objet($nom='', $descr='', $prix='', $id_objet='') {
        $sql = 'UPDATE objet SET nom=%s, descr = %s,  prix = %s WHERE id = %s';
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($descr), $this->db->escape($prix), $this->db->escape($id_objet));
        echo $sql;
        $query = $this->db->query($sql);
    }    

/// Fonction ajouter un objet au site
    public function ajouter_objet($id_user='',$nom='', $id_categorie='', $descr = '', $prix='') {
        $sql = 'INSERT INTO objet (idUser, nom, idCategorie, descr, prix) VALUES (%s, %s, %s, %s, %s)';
        $sql = sprintf($sql, $this->db->escape($id_user), $this->db->escape($nom), $this->db->escape($id_categorie), $this->db->escape($descr), $this->db->escape($prix));
        $query = $this->db->query($sql);
    }

/// Fonction de recherche
    public function rechercher_objet($mot_cle='', $categorie='') {
        $mc='%'.$mot_cle.'%';
        $sql="SELECT * FROM objet WHERE nom LIKE %s AND idCategorie = %s";
        $sql = sprintf($sql, $this->db->escape($mc), $this->db->escape($categorie));
        $query = $this->db->query($sql); 
        return $query->result_array();
    }
    
}

