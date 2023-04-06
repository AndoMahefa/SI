<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_controller extends CI_Controller {
    public function import_csv() {
        $this->load->view('insert/Import_csv');
    }

    public function export_csv() { 
        $this->load->view('insert/Export_csv');
    }

    public function insert_csv() {
        $this->load->model('Csv_model');
        $table = $this->input->post('csv');
        $this->Csv_model->insert_all_datas($table);
    }

    public function generate_csv() {
        $this->load->model('Csv_model');
        $table = $this->input->post('csv');
        $this->Csv_model->create_csv($table);
    }
}
?>