<?php
class Report extends CI_Controller {
    
    public function citizen_report($report){
        $data['status'] = $report;
		$this->load->view('resources/header');
		$this->load->view('report/citizen_report', $data);
		$this->load->view('resources/footer');
    }
}
