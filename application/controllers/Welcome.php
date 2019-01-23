<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('district');
    }

	public function index(){
		$data["kecamatan"] = $this->district->some_district(4)->result();

		$this->load->view('resources/header');
		$this->load->view('welcome_page', $data);
		$this->load->view('resources/footer');
	}
}