<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Districts extends CI_Controller {
    public function detail(){
		$this->load->view('resources/header');
		$this->load->view('districts/detail');
		$this->load->view('resources/footer');




    
	}
}
