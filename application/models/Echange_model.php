<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Echange_model extends CI_Model {

/// Fonction pour lister les échanges
    public function get_echanges() {
        $query = $this->db->query('SELECT * FROM echange'); 
        return convert_to_array($query);
    }

    
/// Fonction pour lister les échanges
    public function get_dipo() {
        $query = $this->db->query('SELECT * FROM echange WHERE date_acceptation=NULL'); 
        return convert_to_array($query);
    }

/// Fonction pour obtenir le nombre d'échange
    public function get_count() {
        $sql='SELECT count(*) nb_echanges FROM echange';
        $query = $this->db->query($sql); 
        return convert_to_array($query);
    }

// /// Fonction pour obtenir le nombre d'échange par user
//     public function get_count_per_user() {
//         $sql='SELECT u.id, count(*) nb_echanges FROM echange e JOIN objet o ON e.idObjet1=o.id JOIN user u ON o.idUser=o.id GROUP BY u.id';
//         $query = $this->db->query($sql); 
//         return convert_to_array($query);
//     }

// /// Fonction pour obtenir l'hitorique des echange effectués'
//     public function get_historique() {
//         $sql='SELECT u.id user1, e.idObjet1, u2.id, e.idObject2, FROM echange e JOIN objet o ON e.idObjet1=o1.id JOIN user u1 ON o1.idUser=u1.id JOIN Objet o2 ON o2.id=e.idObject2 JOIN user u2 ON o2.idUser=u2.id GROUP BY u1.i, u2.id';
//         $query = $this->db->query($sql); 
//         return convert_to_array($query);
//     }

/// Fonction pour créer une nouvelle catégorie
    public function echanger($id_objet1='', $id_objet2=''){
        $sql='INSERT INTO echange(idObjet1, idObjet2, etat) VALUES (%s, %s, 0)';
        $sql = sprintf($sql, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $query = $this->db->query($sql); 
    }

/// Fonction pour accepter un echange
    public function accepter_echange($date='', $id_objet1='', $id_objet2=''){
        $sql1 = 'UPDATE echange e JOIN objet o1 ON e.idOBjet1=o1.id JOIN objet o2 ON e.idObjet2=o2.id SET dateEchange=%s WHERE o1.id=%s AND o2.id=%s';
        $sql1 = sprintf($sql1, $this->db->escape($date), $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $sql2 = 'UPDATE echange e JOIN objet o1 ON e.idOBjet1=o1.id JOIN objet o2 ON e.idObjet2=o2.id SET o1.idUser=o2.idUser, o2.idUser=o1.idUser WHERE o1.id=%s AND o2.id=%s';
        $sql2 = sprintf($sql2, $this->db->escape($id_objet1), $this->db->escape($id_objet2));
        $query = $this->db->query($sql1);
        $query = $this->db->query($sql2);
    }
}
?>