<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Dosen extends CI_Controller
{
    public function index()
    {

        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nidn = '012201';
        $this->dsn1->nama = 'Ilham Maulana';
        $this->dsn1->gender = 'L';
        $this->dsn1->pendidikan = 'S2 Teknik Informatika';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nidn = '012202';
        $this->dsn2->nama = 'Silvia Naura';
        $this->dsn2->gender = 'P';
        $this->dsn2->pendidikan = 'S2 Sistem Informasi';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nidn = '012203';
        $this->dsn3->nama = 'Erik Gunawan';
        $this->dsn3->gender = 'L';
        $this->dsn3->pendidikan = 'S2 Bisnis Digital';

        $ar_dosen = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dosen'] = $ar_dosen;
        $this->load->view('header');
        $this->load->view('view_dosen', $data);
        $this->load->view('footer');
    }
}
