<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Model {

    public function update_pc($num_compte, $nom_compte, $id_compte){
        $requete = "update plan_comptable set numero_compte = %s, nom_compte='%s' where numero_compte = %s";
        $requete = sprintf($requete, $num_compte, $nom_compte, $id_compte);
        echo $requete;
        $this->db->query($requete);
    }

    public function update_plan_tiers($id_plan_tiers, $numero_compte,$num_tiers, $nom_tiers){
        $requete = "update plan_tiers set numero_tiers = %s, nom_tiers = '%s', numero_compte_society = %s where id_plan_tiers = %s";
        $requete = sprintf($requete, $num_tiers, $nom_tiers, $id_plan_tiers);
        echo $requete;
        $this->db->query($requete);
    }
}