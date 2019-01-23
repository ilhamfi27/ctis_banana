<?php
class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('report_m', 'r');
        $this->load->library('weather_station_api');
    }
    
    public function citizen_report($report=null){
        $data['status'] = $report;
        $data['districts'] = $this->weather_station_api->get_all_sensors();
		$this->load->view('resources/header');
		$this->load->view('report/citizen_report', $data);
		$this->load->view('resources/footer');
    }

    public function send_report(){
        $kategori   = $this->input->post('kategori_report');
        $daerah     = $this->input->post('daerah');
        $jam_report = $this->input->post('jam_report');
        $deskripsi  = $this->input->post('deskripsi');
        $data = array(
            'id_lokasi' => $daerah,
            'waktu_kejadian' => $jam_report,
            'deskripsi' => $deskripsi,
            'kategori_kejadian' => $kategori
        );
        $this->r->insert_laporan($data);
        redirect('welcome');
    }
}
