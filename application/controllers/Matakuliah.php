<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Matakuliah extends CI_Controller
{
    public function index()
    {

        $this->load->model('matakuliah_model', 'matkul1');
        $this->matkul1->id = 1;
        $this->matkul1->kode = 'A-763-835';
        $this->matkul1->nama = 'Pemrograman Web';
        $this->matkul1->sks = 3;


        $this->load->model('matakuliah_model', 'matkul2');
        $this->matkul2->id = 2;
        $this->matkul2->kode = 'B-386-503';
        $this->matkul2->nama = 'Dasar-dasar Pemrograman';
        $this->matkul2->sks = 3;

        $this->load->model('matakuliah_model', 'matkul3');
        $this->matkul3->id = 3;
        $this->matkul3->kode = 'C-782-393';
        $this->matkul3->nama = 'Pembentukan Karakter';
        $this->matkul3->sks = 2;

        $ar_matkul = [$this->matkul1, $this->matkul2, $this->matkul2];
        $data['list_matkul'] = $ar_matkul;
        $this->load->view('header');
        $this->load->view('view_matkul', $data);
        $this->load->view('footer');
    }
}
