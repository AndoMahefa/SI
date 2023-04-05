<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdadeSociete extends CI_Model {
    public function nom_societe($nouveau_nom, $id) {
        $requete = "update societe set nom_societe = '%s' where id_societe = %s";
        $requete = sprintf($requete, $nouveau_nom, $id);
        $this->db->query($requete);
    }

    public function nom_dirigeant($nouveau_nom, $id) {
        $requete = "update societe set nom_dirigeant = '%s' where id_societe = %s";
        $requete = sprintf($requete, $nouveau_nom, $id);
        $this->db->query($requete);
    }

    public function adresse_societe($nouveau_nom, $id) {
        $requete = "update societe set adresse_societe = '%s' where id_societe = %s";
        $requete = sprintf($requete, $nouveau_nom, $id);
        $this->db->query($requete);
    }

    public function siege($nouveau_nom, $id) {
        $requete = "update societe set siege = '%s' where id_societe = %s";
        $requete = sprintf($requete, $nouveau_nom, $id);
        $this->db->query($requete);
    }

    public function email($nouveau_nom, $id) {
        $requete = "update societe set email = '%s' where id_societe = %s";
        $requete = sprintf($requete, $nouveau_nom, $id);
        $this->db->query($requete);
    }

    public function telephone($nouveau_nom, $id) {
        $requete = "update societe set telephone = '%s' where id_societe = %s";
        $requete = sprintf($requete, $nouveau_nom, $id);
        $this->db->query($requete);
    }

    public function devise($nouveau_nom, $id) {
        $requete = "update societe set devise = '%s' where id_societe = %s";
        $requete = sprintf($requete, $nouveau_nom, $id);
        $this->db->query($requete);
    }

    public function devise_equivalence($nouveau_nom, $id) {
        $requete = "update societe set devise_equivalence = '%s' where id_societe = %s";
        $requete = sprintf($requete, $nouveau_nom, $id);
        $this->db->query($requete);
    }
}