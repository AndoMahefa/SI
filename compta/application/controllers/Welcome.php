<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function index() {
        $this->load->view('Insert_pc');
    }

    public function devise() {
        $this->load->view('Insert_devise');
    }

    public function plan_tiers() {
        $this->load->view('Insert_plan_tiers');
    }

    public function ecriture() {
        $this->load->view('Ecriture');
    }

    public function insertion_pc() {
        $this->load->model('Insertion');

        $numero = $this->input->post('num_compte');
        $nom = $this->input->post('nom_compte');
        $trimmed = trim($nom);
        if(is_numeric($numero) && strlen($numero) == 5 && !empty($trimmed)){
            echo $trimmed;
            $this->Insertion->insert_pc($numero, $nom);
        } else {
            $this->session->set_flashdata('error', 'Veuillez entrer 5 chiffres');
            redirect(base_url());
        }
    }

    public function insertion_devise() {
        $this->load->model('Insertion');

        $nom = $this->input->post('nom_devise');
        $taux = $this->input->post('taux');
        $trimmed = trim($nom);
        if(is_numeric($taux) && !empty($trimmed)){
            $this->Insertion->insert_devise($nom, $taux);
        } else {
            $this->session->set_flashdata('error', 'Verifiez que vous avez entrer des chiffres sur le taux ou que le nom est vide');
            redirect(base_url("Welcome/devise"));
        }

    }

    public function insertion_plan_tiers() {
        $this->load->model('Insertion');

        $numero_compte = $this->input->post('numero_compte_societe');
        $numero = $this->input->post('num_tiers');
        $nom = $this->input->post('nom_tiers');
        $trimmed = trim($nom);
        $trim_numero = trim($numero);
        if(is_numeric($numero_compte) && !empty($trimmed) && !empty($trim_numero)){
            $this->Insertion->insert_plan_tiers(1, $numero_compte, $numero, $nom);
        } else {
            $this->session->set_flashdata('error', 'Veuillez les donnees que vous avez entrer');
            redirect(base_url("Welcome/plan_tiers"));
        }

    }

    public function insert_csv() {
        $this->load->model('Csv_model');
        $this->Csv_model->insert_all_datas("plan_comptable");
    }

    public function generate_csv() {
        $this->load->model('Csv_model');
        $this->Csv_model->create_csv("code_journal");
    }
}