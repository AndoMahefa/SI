<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_ecriture extends CI_Controller {
    public Function index() {
        $this->load->model("insertall_model");

        $code =  $this->input->post('code_journal'); 
        $num_compte =  $this->input->post('num_compte'); 
        $plan_tiers =  $this->input->post('plan_tiers'); 
        $ref_piece =  $this->input->post('ref_piece'); 
        $libelle =  $this->input->post('libelle'); 
        $date =  $this->input->post('date_journal'); 
        $montant =  $this->input->post('montant'); 
        $devise = $this->input->post('devise');
        $input_debit = $this->input->post('debit');
        $input_credit = $this->input-> post('credit');

        $this->insertall_model->add_ecriture($code , $num_compte , $plan_tiers , $ref_piece , $libelle , $date , $montant , $devise , $input_debit );
        redirect("Home_controller/index");
    }
}
?>