<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertion extends CI_Model {
    public function insert_pc($numero_compte, $nom_compte) {
        $requete = "insert into plan_comptable values (%s, '%s')";
        $requete = sprintf($requete, $numero_compte, $nom_compte);
        echo $requete;
        $this->db->query($requete);
    }

    public function insert_devise($nom_devise, $valeur) {
        $requete = "insert into devise values (default, '%s', %s, current_date())";
        $requete = sprintf($requete, $nom_devise, $valeur);
        echo $requete;
        $this->db->query($requete);
    }

    public function insert_plan_tiers($id_societe, $numero_compte_societe, $numero_tiers, $nom_tiers) {
        $requete = "insert into plan_tiers values (%s, default, '%s', '%s','%s')";
        $requete = sprintf($requete, $id_societe, $numero_compte_societe, $numero_tiers, $nom_tiers);
        echo $requete;
        $this->db->query($requete);
    }
}