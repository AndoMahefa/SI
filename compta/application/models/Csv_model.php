<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_model extends CI_Model {
    public function insert_all_datas($file){
        $i=0;
        $datas = array();
        // manokatra anle fichier .csv
        $fp = fopen ("donnees/".$file.'.csv','r');
        //maka ny anarana colonnes anle table
        $columns = $this->db->list_fields($file);
        while($line = fgets($fp)){//mijery raha tonga any @ farany le fichier le curseur
            echo($line."\n");
            $row = explode(';',$line);//maka ny ligne ray @le fichier de parseny
            for($i=0; $i<count($row); $i++) {
                $datas[$columns[$i]] = $row[$i];          
            }
            $this->db->insert($file,$datas);
        }
        fclose($fp);
    }

    public function create_csv($table){
        //maka ny anarana colonnes anle table
        $columns = $this->db->list_fields($table);
        $i=0;
        $new_row = "";
        //manokatra anle fichier
        $fp = fopen ("donnees/".$table.".csv" , "a+");

        //maka ny donnee table par ligne
        $query = $this->db->get($table);
        foreach ($query->result_array() as $row) {
            for($i=0; $i<count($row); $i++) {
                $count = count($row);
                $rw = $row;
                if($i == $count-1) {
                    $new_row = $new_row . $rw[$columns[$i]];
                } else{
                    $new_row = $new_row . $rw[$columns[$i]] . ";";
                }
            }
            //manoratra anaty fichier
            echo $new_row;
            fwrite($fp,$new_row."\n");
            $new_row="";
        }
    }
}