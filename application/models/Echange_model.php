<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Echange_model extends CI_Model {

/// Fonction pour lister les échanges
    public function get_echanges() {
        $query = $this->db->query('SELECT * FROM echange'); 
        return $query->result_array();
    }

    
/// Fonction pour lister les échanges
    public function get_dipo() {
        $query = $this->db->query('SELECT * FROM objet WHERE etat=0'); 
        return $query->result_array();
    }
    
/// Fonction pour lister les échanges pour vous
    public function get_dipo_by_user($id_user) {
        $sql = 'SELECT * FROM echange e JOIN objet o ON e.idObjet1=o.id WHERE WHERE o.etat=0 AND o.idUser=%s';
        $sql = sprintf($sql, $this->db->escape($id_user));
        echo $sql;
        $query = $this->db->query($sql);
        $array = $query->result_array();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['objet1'] = $this->objet_model->get_by_id($array[$i]['idObjet1']);
            $array[$i]['objet2'] = $this->objet_model->get_by_id($array[$i]['idObjet2']);
        }
        return $array;
    }

/// Fonction pour obtenir le nombre d'échange
    public function get_count() {
        $sql='SELECT count(*) nb_echanges FROM echange';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour obtenir le nombre d'échange par user
    public function get_count_per_user() {
        $sql='SELECT o.idUser user, count(*) nb_echanges FROM echange e JOIN objet o ON e.idObjet1=o.id GROUP BY o.idUser';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour obtenir l'hitorique des echange effectués'
    public function get_historique() {
        $sql='SELECT o1.idUser user1, e.idObjet1, o2.idUser user2, e.idObjet2, e.date_acceptation FROM echange e JOIN objet o1 ON e.idObjet1=o1.id JOIN OBJET o2 ON e.idObjet2=o2.id WHERE date_acceptation IS NOT NULL GROUP BY o1.idUser, o2.idUser';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }

/// Fonction pour créer une nouvelle catégorie
    public function echanger($id_objet1='', $id_objet2=''){
        $sql='INSERT INTO echange(idObjet1, idObjet2) VALUES (%s, %s)';
        $sql2='UPDATE objet SET etat=3 WHERE id=%s OR id=%s';
        $sql = sprintf($sql, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $sql2 = sprintf($sql2, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $query = $this->db->query($sql);
        $query = $this->db->query($sql2); 
    }

/// Fonction pour accepter un echange
    public function accepter_echange($date='', $id_objet1='', $id_objet2=''){
        $sql1 = 'UPDATE echange e JOIN objet o1 ON e.idOBjet1=o1.id JOIN objet o2 ON e.idObjet2=o2.id SET date_acceptation=%s WHERE o1.id=%s AND o2.id=%s';
        $sql1 = sprintf($sql1, $this->db->escape($date), $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $query = $this->db->query($sql1);
        $sql2 = 'UPDATE echange e JOIN objet o1 ON e.idOBjet1=o1.id JOIN objet o2 ON e.idObjet2=o2.id SET o1.idUser=o2.idUser, o2.idUser=o1.idUser WHERE o1.id=%s AND o2.id=%s';
        $sql2 = sprintf($sql2, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $query = $this->db->query($sql2);
        $sql3 = 'UPDATE objet SET etat=0 WHERE id=%s OR id=%s';
        $sql3 = sprintf($sql3, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $query = $this->db->query($sql3);
        echo $sql2;
    }
}