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
        $query = $this->db->query($sql); 
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->get_photo_by_objet($array[$i]['id']);
        }
        return $array;
    }

/// Fonction pour lister les échanges
    public function get_pourcentage($pourcentage='', $id_objet='', $id_user='') {
        $objet = $this->objet_model->get_by_id($id_objet);
        $sql = 'SELECT * FROM objet WHERE idUser != %s AND etat = 0 AND prix > ('.$objet['prix'].'-'.$objet['prix'].'*%s) AND prix<('.$objet['prix'].'+'.$objet['prix'].'*%s) AND id != %s';
        $sql = sprintf($sql, $this->db->escape($id_user), $this->db->escape($pourcentage), $this->db->escape($pourcentage), $this->db->escape($id_objet)); 
        $query = $this->db->query($sql);
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->get_photo_by_objet($array[$i]['id']);
        }
        return $array;
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
        $query = $this->db->query($sql);
    }    

/// Fonction ajouter un objet au site
    public function ajouter_photo($photo) {
        $id = $this->objet_model->get_last_id();
        $sql = 'INSERT INTO photo (photo, idObjet) VALUES (%s, %s)';
        $sql = sprintf($sql, $this->db->escape('assets/img/'. $photo), $this->db->escape($id['last_id']));
        $this->db->query($sql);
    }
    
    public function ajouter_objet($id_user='',$nom='', $descr = '', $prix='', $photo) {
        $sql = 'INSERT INTO objet (idUser, nom, idCategorie, descr, prix) VALUES (%s, %s, 4, %s, %s)';
        $sql = sprintf($sql, $this->db->escape($id_user), $this->db->escape($nom), $this->db->escape($descr), $this->db->escape($prix));
        $this->db->query($sql);
        $this->objet_model->ajouter_photo($photo);
    }
    
    public function get_last_id() {
        $sql = 'SELECT id as last_id from objet order by id DESC LIMIT 1';
        $query = $this->db->query($sql);
        return $query->row_array();
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

/// Fonction pour lister tous les objets
    public function compare_prix($id_objet1='', $id_objet2='') {
        $query = $this->db->query('SELECT ((((SELECT prix FROM objet WHERE id=%s)-(SELECT prix FROM objet WHERE id=%s))*100)/(SELECT prix FROM objet WHERE id=%s)) pourcentage_diff FROM objet'); 
        $array = $query->row_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['photo'] = $this->objet_model->get_photo_by_objet($array[$i]['id']);
        }
        return $array;
    }
}