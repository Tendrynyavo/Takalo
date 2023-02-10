<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Echange_model extends CI_Model {

/// Fonction pour lister les échanges
    public function get_echanges() {
        $query = $this->db->query('SELECT * FROM echange WHERE id NOT IN (SELECT idEchange FROM annule)'); 
        return $query->result_array();
    }

    
/// Fonction pour lister les échanges
    public function get_dipo() {
        $query = $this->db->query('SELECT * FROM objet WHERE etat=0'); 
        return $query->result_array();
    }
        
/// Fonction pour lister les échanges pour vous
    public function get_dipo_by_user($id_user) {
        $sql = 'SELECT e.* FROM echange e JOIN objet o ON e.idObjet1=o.id WHERE o.etat=3 AND o.idUser=%s AND e.id NOT IN (SELECT idEchange FROM annule)';
        $sql = sprintf($sql, $this->db->escape($id_user));
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
        $sql='SELECT count(*) nb_echanges FROM echange WHERE date_acceptation IS NOT NULL';
        $query = $this->db->query($sql); 
        return $query->row_array();
    }
    
    /// Fonction pour obtenir le nombre d'échange par user
    public function get_count_per_user() {
        $sql='SELECT o.idUser user, count(*) nb_echanges FROM echange e JOIN objet o ON e.idObjet1=o.id WHERE date_acceptation IS NOT NULL GROUP BY o.idUser';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }
    
    /// Fonction pour obtenir l'hitorique des echange effectués'
    public function get_historique($id_objet) {
        $sql = 'SELECT u.nom, date
                FROM historique h
                    JOIN objet o ON h.idObjet=o.id
                    JOIN user u ON h.proprietaire=u.id 
                WHERE idObjet = %s';
        $sql = sprintf($sql, $this->db->escape($id_objet));
        $query = $this->db->query($sql);
        return $query->result_array();
    }

/// Fonction pour créer une nouvelle catégorie
    public function echanger($id_objet1='', $id_objet2='') {
        $sql='INSERT INTO echange(idObjet1, idObjet2) VALUES (%s, %s)';
        $sql2='UPDATE objet SET etat=3 WHERE id=%s OR id=%s';
        $sql = sprintf($sql, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $sql2 = sprintf($sql2, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $query = $this->db->query($sql);
        $query = $this->db->query($sql2); 
    }
    
    /// Fonction pour accepter un echange
    public function accepter_echange($id_objet1='', $id_objet2='', $id_user1='', $id_user2=''){
        $this->echange_model->historiser($id_objet1, $id_user1);
        $this->echange_model->historiser($id_objet2, $id_user2);
        $sql = 'UPDATE echange e JOIN objet o1 ON e.idOBjet1=o1.id JOIN objet o2 ON e.idObjet2=o2.id SET date_acceptation=now() WHERE o1.id=%s AND o2.id=%s';
        $sql = sprintf($sql, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $this->db->query($sql);
        $this->objet_model->echanger($id_objet2, $id_user1);
        $this->objet_model->echanger($id_objet1, $id_user2);
    }

/// Fonction pour annuler un échange
    public function annuler($id_echange='', $id_objet1='', $id_objet2=''){
        $sql='INSERT INTO annule (idEchange) VALUES (%s)';
        $sql=sprintf($sql, $this->db->escape($id_echange));
        $this->db->query($sql);
        $sql2='UPDATE objet SET etat=3 WHERE id=%s OR id=%s';
        $sql2=sprintf($sql2, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $this->db->query($sql2);
    }

    public function historiser($id_objet, $proprietaire) {
        $sql = 'INSERT INTO historique (idObjet, proprietaire) VALUES (%s, %s)';
        $sql = sprintf($sql, $this->db->escape($id_objet), $this->db->escape($proprietaire));
        $this->db->query($sql);
    }
}