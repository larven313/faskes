<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('index');
        $this->load->view('layouts/footer');
    }

    public function index_puskesmas()
    {
        $this->load->view('layouts/header');
        $this->load->view('index');
        $this->load->view('layouts/footer');
    }
}
