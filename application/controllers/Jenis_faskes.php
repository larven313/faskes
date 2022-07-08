<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Jenis_faskes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('email')) {
		//     redirect('user/index');
		// }
		$this->load->model('Jenis_Faskes_model', 'jenis_faskes');
	}

	public function index()
	{

		$queryAllJenis_Faskes = $this->jenis_faskes->getDataJenis_Faskes();
		$data = array('queryAllJenis_Faskes' => $queryAllJenis_Faskes);
		$this->session->set_userdata('menu', 'jenis_faskes');
		$session['menu'] = $this->session->userdata('menu');

		$this->load->view('layouts/header', $session);
		$this->load->view('jenis_faskes/crud_jenis_faskes', $data);
		$this->load->view('layouts/footer');
	}

	public function create_jenis_faskes()
	{
		$this->session->set_userdata('menu', 'jenis_faskes');
		$session['menu'] = $this->session->userdata('menu');

		$this->load->view('layouts/header', $session);
		$this->load->view('jenis_faskes/create_jenis_faskes');
		$this->load->view('layouts/footer');
	}

	public function fungsi_create_jenis_faskes()
	{
		$nama = $this->input->post('nama');

		$ArrayInsert = array(
			'nama' => $nama,
		);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Membuat Jenis Faskes</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');
		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";

		$this->jenis_faskes->insertDataJenis_Faskes($ArrayInsert);
		redirect(base_url('jenis_faskes/index'));
	}

	public function edit_jenis_faskes($id)
	{
		$queryjenis_faskesDetail = $this->jenis_faskes->getDataJenis_FaskesDetail($id);

		// echo "<pre>";
		// print_r($queryMahasiswaDetail);
		// echo "</pre>";

		$data = array('queryDetailJenis_Faskes' => $queryjenis_faskesDetail);

		$this->session->set_userdata('menu', 'jenis_faskes');
		$session['menu'] = $this->session->userdata('menu');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Mengubah Jenis Faskes</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');

		$this->load->view('layouts/header', $session);
		$this->load->view('jenis_faskes/edit_jenis_faskes', $data);
		$this->load->view('layouts/footer');
	}

	public function fungsi_edit_jenis_faskes()
	{
		$nama = $this->input->post('nama');
		$id = $this->input->post('id');


		$ArrayUpdate = array(
			'id' => $id,
			'nama' => $nama,

		);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Mengubah Akun</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');
		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";

		$this->jenis_faskes->updateDataJenis_Faskes($id, $ArrayUpdate);
		redirect(base_url('jenis_faskes/index'));
	}

	public function delete_jenis_faskes($id)
	{
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Menghapus Jenis Faskes</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');
		$this->jenis_faskes->deleteDataJenis_Faskes($id);
		redirect(base_url('jenis_faskes/index'));
	}
}
