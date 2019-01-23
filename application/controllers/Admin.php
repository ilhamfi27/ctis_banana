<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('resources/headeradmin');
        $this->load->view('resources/sideradmin');

        $this->load->view('admin/admin');

        $this->load->view('resources/footeradmin');
    }
}
