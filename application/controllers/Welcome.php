<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$name = "Jhon";

		$this->load->view('welcome_message', [
			'name' => $name,
			'title' => 'STT Nurul FIkri'
		]);
	}

	// public function mhs()
	// {
	// 	// $this->load->model('Mahasiswa_model', 'mhs1');
	// 	$this->load->model('mahasiswa_model', 'mhs1');

	// 	$mhs1->id = 1;
	// 	$mhs1->nama = "Budi Setiawan";
	// 	$mhs1->gender = 'L';
	// 	$mhs1->ipk = 3.82;

	// 	$data['mahasiswa'] = $mhs1;
	// 	$this->load->view('welcome_message', $data);
	// }
}
