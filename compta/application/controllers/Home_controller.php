<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {
	public function index(){
		$this->load->view("home") ;
	}

	public function add_ecriture(){
		$this->load->View("Ecriture") ; 
	}

	public function show_pc(){
		$this->load->model("Select");
		$plan_comptable['pc'] = $this->Select->plan_comptable();

		$this->load->view("listes/All_pc", $plan_comptable);
	}

	public function show_journal() {
		$this->load->model("Allselect_model");
		$journals['journal'] = $this->Allselect_model->journal(1);

		$this->load->view("listes/Journal", $journals);
	}
}