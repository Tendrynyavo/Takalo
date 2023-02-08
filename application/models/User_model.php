<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

/// Fonction pour lister tous les users
    public function get_users() {
        $query = $this->db->query('SELECT * FROM user'); 
        return $query->result_array();
    }

/// Fonction pour verifier un compte par son email et son mot de passe
    public function check_user($user_email = '', $user_mdp='') {
        $sql = 'SELECT * FROM user WHERE email = %s AND mdp = %s';
        $sql = sprintf($sql, $this->db->escape($user_email), $this->db->escape($user_mdp));
        $query = $this->db->query($sql);
        return $query->result_array();;
    }
    
/// Fonction pour verifier si le compte est un administrateur
    public function check_admin($user_email = '', $user_mdp='') {
        $sql = 'SELECT * FROM user WHERE email = %s AND mdp = %s AND etat= %d';
        $sql = sprintf($sql, $this->db->escape($user_email), $this->db->escape($user_mdp), 10);
        $query = $this->db->query($sql);
        return $query->result_array();
    }

/// Fonction s'inscrire sur le site
    public function sign_up($nom='', $prenom='', $user_email = '', $user_mdp='') {
        $sql = 'INSERT INTO user(nom, prenom, email, mdp, etat) VALUES (%s, %s, %s, %s, 0)';
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($user_email), $this->db->escape($user_mdp));
        $query = $this->db->query($sql);
    }

/// Fonction pour obtenir le nombre d'utilisateurs inscrits
    public function get_count_inscrits() {
        $sql='SELECT count(*) nb_user FROM user WHERE etat=0';
        $query = $this->db->query($sql); 
        return $query->result_array();
    }
}
?>

