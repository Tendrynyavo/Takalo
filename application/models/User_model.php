<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

/// Fonction pour prendre tous les users limités à 10
    public function get_users() {
        $query = $this->db->query('SELECT * FROM user'); 
        return convert_to_array($query);
    }

/// Fonction pour verifier un compte par son email et son mot de passe
    public function check_user($user_email = '', $user_mdp='') {
        $sql = 'SELECT * FROM user WHERE email = %s AND mdp = %s';
        $sql = sprintf($sql, $this->db->escape($user_email), $this->db->escape($user_mdp));
        $query = $this->db->query($sql);
        $array = convert_to_array($query);
        if ($array[0]!=null) {
            # code...
            echo $array[0]['nom'];
            return $array;
        }
    }
    
/// Fonction pour verifier si le compte est un administrateur
    public function check_admin($user_email = '', $user_mdp='') {
        $sql = 'SELECT * FROM user WHERE email = %s AND mdp = %s';
        $sql = sprintf($sql, $this->db->escape($user_email), $this->db->escape($user_mdp));
        $query = $this->db->query($sql);
        $array = convert_to_array($query);
        if ($array[0]['estAdmin']==10) {
            # code...
            echo 'true';
            return $array;
        }
        else {
            echo 'false';
        }
    }

/// Fonction s'inscrire sur le site
    public function sign_up($nom='', $prenom='', $user_email = '', $user_mdp='') {
        $sql = 'INSERT INTO user(nom, prenom, email, mdp, estAdmin) VALUES (%s, %s, %s, %s, 0)';
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($user_email), $this->db->escape($user_mdp));
        $query = $this->db->query($sql);
    }
}
?>

