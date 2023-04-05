<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class insertall_model extends CI_Model{
        function add_about_society($logo , $nom_societe , $nom_dirigeant , $adresse_society , $mail_society , $telephone_societe , $idplan , $objectif , $date_creation , $siege , $nombre_employer , $devise , $devise_equi , $nif , $photo_nif  ,$stat , $nrcs){
            $request = "insert into societe values(null,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)";
            $request  = sprintf($request,$this->db->escape($logo),$this->db->escape($nom_societe),
            $this->db->escape($nom_dirigeant),
            $this->db->escape($adresse_society),$this->db->escape($mail_society),$this->db->escape($telephone_societe),
            $this->db->escape($idplan),$this->db->escape($objectif),$this->db->escape($date_creation),
            $this->db->escape($siege),$this->db->escape($nombre_employer),$this->db->escape($devise),
            $this->db->escape($devise_equi),$this->db->escape($nif),$this->db->escape($photo_nif),
            $this->db->escape($stat),$this->db->escape($nrcs));
            $this->db->query($request);
            return $request;
        }
        function add_ecriture($codejournal , $numerocompte , $plantiers , $reference , $libelle , $date , $montant , $devise ){
            $request = "insert into journal values(null , 1 , %s , %s , %s , %s , %s , %s , %s , %s , %s , %s , 0 )" ; 
            $request = sprintf($request , $this->db->escape($codejournal) , $this->db->escape($numerocompte) ,
            $this->db->escape($plantiers) , $this->db->escape($reference) , $this->db->escape($libelle) ,
            $this->db->escape($date) , $this->db->escape($montant) , $this->db->escape($devise)) ;
            $this->db->query($request) ;
        }
    }
?>