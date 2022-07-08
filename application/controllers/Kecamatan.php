<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Kecamatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('email')) {
		//     redirect('user/index');
		// }
		$this->load->model('Kecamatan_model');
	}

	public function index()
	{

		$queryAllKecamatan = $this->Kecamatan_model->getDataKecamatan();
		$data = array('queryAllKecamatan' => $queryAllKecamatan);

		$this->session->set_userdata('menu', 'kecamatan');
		$session['menu'] = $this->session->userdata('menu');

		$this->load->view('layouts/header', $session);
		$this->load->view('kecamatan/crud_kecamatan', $data);
		$this->load->view('layouts/footer');
	}

	public function create_kecamatan()
	{
		$this->session->set_userdata('menu', 'kecamatan');
		$session['menu'] = $this->session->userdata('menu');

		$this->load->view('layouts/header', $session);
		$this->load->view('kecamatan/create_kecamatan');
		$this->load->view('layouts/footer');
	}

	public function fungsi_create_kecamatan()
	{
		$nama = $this->input->post('nama');

		$ArrayInsert = array(
			'nama' => $nama,
		);

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";
		// var_dump($ArrayInsert);
		$this->Kecamatan_model->insertDataKecamatan($ArrayInsert);
		redirect(base_url('kecamatan/index'));
	}

	public function edit_kecamatan($id)
	{
		$queryKecamatanDetail = $this->Kecamatan_model->getDataKecamatanDetail($id);

		// echo "<pre>";
		// print_r($queryMahasiswaDetail);
		// echo "</pre>";
		$this->session->set_userdata('menu', 'kecamatan');
		$session['menu'] = $this->session->userdata('menu');

		$this->load->view('layouts/header', $session);
		$data = array('queryDetailKecamatan' => $queryKecamatanDetail);
		$this->load->view('kecamatan/edit_kecamatan', $data);
		$this->load->view('layouts/footer');
	}

	public function fungsi_edit_kecamatan()
	{
		$nama = $this->input->post('nama');
		$id = $this->input->post('id');


		$ArrayUpdate = array(
			'id' => $id,
			'nama' => $nama,

		);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Mengubah Kecamatan</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');
		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";

		$this->Kecamatan_model->updateDataKecamatan($id, $ArrayUpdate);
		redirect(base_url('kecamatan/index'));
	}

	public function delete_kecamatan($id)
	{
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Menghapus Kecamatan</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');
		$this->Kecamatan_model->deleteDataKecamatan($id);
		redirect(base_url('kecamatan/index'));
	}
}
