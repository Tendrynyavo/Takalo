<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('convert_to_array')) {
/// Fonction pour convertir les resultats des requetes en tableau
        function convert_to_array($query) {
            $array = array();
            foreach ($query->result_array() as $rows) {
                $array[] = $rows;
            }
            return $array;
        }
    }
?>
