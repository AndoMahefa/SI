<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Model {
    public function plan_comptable() {
        $requete = "select * from plan_comptable";
        $result = $this->db->query($requete);
        $pc = array();
        foreach ($result->result_array() as $value) {
            array_push($pc,$value) ;
        }
        return $pc;
    }
}