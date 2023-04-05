<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Model {
    public function delete_pc($num_compte) {
        $requete = "delete from plan_comptable where numero_compte = %s";
        $requete = sprintf($requete, $num_compte);
        echo $requete;
        $this->db->query($requete);
    }

    public function delete_plan_tiers($id_plan_tiers) {
        $requete = "delete from plan_tiers where id_plan_tiers = %s";
        $requete = sprintf($requete, $id_plan_tiers);
        echo $requete;
        $this->db->query($requete);
    }
}