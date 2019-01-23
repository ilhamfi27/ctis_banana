<?php
class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('weather_station_api');
    }
    
    public function citizen_report($report){
        $data['status'] = $report;
        $data['districts'] = $this->weather_station_api->get_all_sensors();
		$this->load->view('resources/header');
		$this->load->view('report/citizen_report', $data);
		$this->load->view('resources/footer');
    }
}
