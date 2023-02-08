<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('objet_model');
    }

/// Fonction pour lister tous les objets
    public function get_objets() {
        $query = $this->db->query('SELECT * FROM objet'); 
        $array = $query->row_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->get_photo_by_objet($array[$i]['id']);
        }
        return $array;
    }

/// Fonction pour obtenir un objet par son id
    public function get_by_id($id = 1) {
        $sql='SELECT o.*, u.nom as user, u.id as user_id FROM objet o JOIN user u ON o.idUser=u.id WHERE o.id = %s';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql);
        $objet = $query->row_array();
        $objet['photo'] = $this->objet_model->get_photo_by_objet($objet['id']);
        return $objet;
    }

/// Fonction pour obtenir les photos d'un objet par son id
    public function get_photo() {
        $sql='SELECT * FROM photo p JOIN objet o ON p.idObjet=o.id';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour obtenir les photos d'un objet par son id
    public function get_photo_by_objet($id_objet = 1) {
        $sql='SELECT * FROM photo p JOIN objet o ON p.idObjet=o.id WHERE o.id=%s';
        $sql = sprintf($sql, $this->db->escape($id_objet));
        $query = $this->db->query($sql);
        return $query->result_array();
    }

/// Fonction pour obtenir un objet par son id
    public function get_by_id_user($id = 1) {
        $sql='SELECT * FROM objet WHERE iduser = %s';
        $sql = sprintf($sql, $this->db->escape($id));
        echo $sql;
        $query = $this->db->query($sql); 
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->get_photo_by_objet($array[$i]['id']);
        }
        return $array;
    }

/// Fonction pour lister les échanges
    public function get_pourcentage($pourcentage='', $id_objet='', $id_user='') {
        $query = $this->db->query('SELECT * FROM objet WHERE etat=0, prix>(prix-prix*%s), prix<(prix+prix*%s), NOT idUser=%s, id=%s');
        $sql = sprintf($sql, $this->db->escape($pourcentage), $this->db->escape($pourcentage), $this->db->escape($id_user), $this->db->escape($id_objet)); 
        return $query->result_array();
    }

/// Fonction pour obtenir les objet n'appartenat pas à un utilisateur en utilisant son id
    public function get_not_owned($id = 1) {
        $sql='SELECT * FROM objet WHERE NOT iduser = %s AND etat = 0';
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql); 
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->get_photo_by_objet($array[$i]['id']);
        }
        return $array;
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
    public function ajouter_objet($id_user='',$nom='', $descr = '', $prix='') {
        $sql = 'INSERT INTO objet (idUser, nom, descr, prix) VALUES (%s, %s, %s, %s)';
        $sql = sprintf($sql, $this->db->escape($id_user), $this->db->escape($nom), $this->db->escape($id_categorie), $this->db->escape($descr), $this->db->escape($prix));
        $query = $this->db->query($sql);
    }

/// Fonction de recherche
    public function rechercher_objet($mot_cle='', $categorie='') {
        $mc='%'.$mot_cle.'%';
        $sql="SELECT * FROM objet WHERE nom LIKE %s";
        $sql = sprintf($sql, $this->db->escape($mc));
        if ($categorie != -1) $sql = $sql . ' AND idCategorie = ' . $this->db->escape($categorie);
        $query = $this->db->query($sql);
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->get_photo_by_objet($array[$i]['id']);
        }
        return $array;
    }   

/// Fonction pour changer l'état d'un objet
    public function change_etat($etat='', $id_objet=''){
        $sql='UPDATE objet SET etat=% WHERE id=%s';
        $sql=sprintf($sql, $this->db->escape($etat), $this->db->escape($id_objet1));
        $this->db->query($sql);
    }
}