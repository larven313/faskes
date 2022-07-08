<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Faskes_model');
		$this->load->model('Jenis_Faskes_model');
		$this->load->model('Kecamatan_model');
	}
	public function index()
	{
		$name = "Jhon";
		// $data['queryAllFaskes'] = $this->Faskes_model->join3table($perpage, $offset)->result();
		$faskes = $this->db->count_all('faskes');
		// $this->load->view('header');

		// print_r($faskes);
		// die;
		$this->load->view('layouts/header_index');
		$this->load->view('landing/index', [
			'jmlhFaskes' => $faskes
		]);
		$this->load->view('layouts/footer');
	}
}
