<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {
	public function index(){
        $this->load->helper('url');
        if($this->input->post('upload') != NULL ){ 
            $data = array(); 
            $filename = "" ;
            $filenames = "" ;
            if(!empty($_FILES['file']['name'])){ 
                $config['upload_path'] = 'uploads/'; 
                $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                $config['max_size'] = '100'; // max_size in kb 
                $config['file_name'] = $_FILES['file']['name']; 
                $this->load->library('upload',$config); 
                if($this->upload->do_upload('file')){ 
                    $uploadData = $this->upload->data(); 
                    $filename = $uploadData['file_name']; 
                    echo  $filename ;
                }else{ 
                    $data['response'] = 'failed'; 
                } 
            }else{ 
                $data['response'] = 'failed'; 
            }
            if(!empty($_FILES['other']['name'])){ 
                $configs['upload_path'] = 'uploads/'; 
                $configs['allowed_types'] = 'jpg|jpeg|png|gif'; 
                $configs['max_size'] = '100'; // max_size in kb 
                $configs['file_name'] = $_FILES['other']['name']; 
                $this->load->library('upload',$configs); 
                if($this->upload->do_upload('other')){ 
                    $uploadDataother = $this->upload->data(); 
                    $filenames = $uploadDataother['file_name']; 
                    echo  $filenames ;
                }else{ 
                    $data['response'] = 'failed'; 
                } 
            }else{ 
                $data['response'] = 'failed'; 
            }
            $logo = $filename ;
            $nom_society = "" ;
            $nom_dirigeant = "" ;
            $adresse_society = "";
            $mail_society = "" ;
            $telephone_society = "" ;
            $idplan = "" ;
            $objectif ="" ;
            $date_creation ="" ;
            $siege = "" ;
            $nombre_employer = "" ;
            $devise = "" ;
            $devise_equi = "" ;
            $nif = "" ;
            $photo_nif = $filenames ;
            $stat = "" ;
            $nrcs = "" ; 
            $this->insertall_model->add_about_society($logo , $nom_society , $nom_dirigeant , $adresse_society , $mail_society , $telephone_society , $idplan , $objectif , 
            $date_creation  , $siege , $nombre_employer , $devise , $devise_equi , $nif , $photo_nif , $stat , $nrcs ) ; 
        }else{
            $this->load->view('login'); 
        } 
    } 
}	
