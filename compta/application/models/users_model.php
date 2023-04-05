<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class users_model extends CI_Model{
        public function user_exist($email , $password){
            $test = "select count(*) as n from user where email = %s and password = %s";
            $sa = sprintf($test, $this->db->escape($email)  , $this->db->escape($password)) ;
            $result =$this->db->query($sa);
            $res = array();
            $res = $result->row_array();
            return $res['n'];
        }
    }
?>
