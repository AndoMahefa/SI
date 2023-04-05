<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Allselect_model extends CI_Model{
      public function allsociete(){
          $test = "select * from societe";
          $result =$this->db->query($test);
          $res = array();
          foreach($result->result_array() as $row) {
              array_push($res , $row) ;
          }
          return $res ;
      }
      public function plan_comptable_societe($id_society){
        $request = "select * from plan_comptable_society where id_societe = %s";
        $request_sprintf  = sprintf($request,$this->db->escape($id_society)) ;
        $result = $this->db->query($request_sprintf) ;
        $res = array() ;
        foreach ($result->result_array() as $value) {
          array_push($res,$value) ;
        }
        return $res ;
      }
      public function plan_tiers($id_society){
        $request = "select * from plan_tiers where id_societe = %s";
        $request_sprintf  = sprintf($request,$this->db->escape($id_society)) ;
        $result = $this->db->query($request_sprintf) ;
        $res = array() ;
        foreach ($result->result_array() as $value) {
          array_push($res,$value) ;
        }
        return $res ;
      }
      public function journal($id_society){
        $request = "select * from journal where id_societe = %s  ";
        $request_sprintf  = sprintf($request,$this->db->escape($id_society)) ;
        $result = $this->db->query($request_sprintf) ;
        $res = array() ;
        foreach ($result->result_array() as $value) {
          array_push($res,$value) ;
        }
        return $res ;
      }
      public function code_journal(){
        $request = "select * from code_journal_society ";
        $result = $this->db->query($request) ;
        $res = array() ;
        foreach ($result->result_array() as $value) {
          array_push($res,$value) ;
        }
        return $res ;
      }
      public function name_code_journal($idcode){
          $test = "select * from code_journal_society where idcode_journal_society = %s";
          $sa = sprintf($test, $this->db->escape($idcode)) ;
          $result =$this->db->query($sa);
          $res = array();
          $res = $result->row_array();
          return $res['code_journal'];
      }
      public function plan_com(){
        $request = "select * from plan_comptable_society";
        $result = $this->db->query($request) ;
        $res = array() ;
        foreach ($result->result_array() as $value) {
          array_push($res,$value) ;
        }
        return $res ;
      }
      public function name_plan_comptable($idcode){
        $test = "select * from plan_comptable_society where id_plan_comptable_society = %s";
        $sa = sprintf($test, $this->db->escape($idcode)) ;
        $result =$this->db->query($sa);
        $res = array();
        $res = $result->row_array();
        return $res['numero_compte'];
      }
      public function name_plan_tiers($idcode){
        $test = "select * from plan_tiers where id_plan_tiers = %s";
        $sa = sprintf($test, $this->db->escape($idcode)) ;
        $result =$this->db->query($sa);
        $res = array();
        $res = $result->row_array();
        return $res['nom_tiers'];
      }
      public function debit_credit(){
        $request = " select sum(debit) as debit , sum(credit) as credit from journal";
        $result = $this->db->query($request) ;
        $res = $result->row_array() ; 
        return $res ;
      }
    }
?>
