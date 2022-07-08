<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Puskesmas extends CI_Controller
{

    public function index()
    {


        $this->load->view('layouts/header');
        $this->load->view('puskesmas/index');
        $this->load->view('layouts/footer');
    }
    public function create()
    {
        $this->load->view('header');
        $this->load->view('mahasiswa/create');
        $this->load->view('footer');
    }
    public function save()
    {
        $this->load->model('mahasiswa_model', 'mhs3');

        $this->mhs3->nim = $this->input->post('nim');
        $this->mhs3->nama = $this->input->post('nama');
        $this->mhs3->gender = $this->input->post('gender');
        $this->mhs3->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs3->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs3->ipk = $this->input->post('ipk');
        $this->mhs3->prodi = $this->input->post('prodi');

        $data['mhs3'] = $this->mhs3;

        $this->load->view('header');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('footer');

        // redirect('mahasiswa/view/', $this->mhs3->nim);
    }

    public function view()
    {

        // die(print_r($this->mhs3));
        // $data['mhs3'] = $this->mhs3;

    }
}
