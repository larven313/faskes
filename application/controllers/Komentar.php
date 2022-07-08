<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Komentar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white "><i class="fa-solid fa-circle-exclamation"></i></span>
            <span class="alert-text text-white "><strong>Danger !</strong> Login terlebih dahulu !</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
			redirect('user/index');
		}
		$this->load->model('User_model');
		$this->load->model('Faskes_model');
		$this->load->model('Komentar_model');
	}

	public function index()
	{
		$data['queryAllKomentar'] = $this->Komentar_model->join4table()->result();
		$this->load->view('komentar/crud_komentar', $data);
	}

	public function create_komentar($id)
	{
		$queryAllFaskes = $this->Komentar_model->getDataFaskes();
		$queryAllKomentar = $this->Komentar_model->allKomentar($id)->result();
		echo "<pre>";
		print_r($id);
		echo "</pre>";

		$data = array(
			'queryAllFaskes' => $queryAllFaskes,
			'allKomentar' => $queryAllKomentar,
			'id' => $id
		);
		$this->load->view('layouts/header_index');
		$this->load->view('landing/create_komentar', $data);
		$this->load->view('layouts/footer');
	}

	public function fungsi_create_komentar()
	{
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		$users_id = $this->input->post('users_id');
		$faskes_id = $this->input->post('faskes_id');
		$nilai_rating_id = $this->input->post('nilai_rating_id');

		$ArrayInsert = array(
			'tanggal' => $tanggal,
			'isi' => $isi,
			'users_id' => $users_id,
			'faskes_id' => $faskes_id,
			'nilai_rating_id' => $nilai_rating_id
		);

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";
		// die;

		$this->session->set_flashdata('message', '    <div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success!</strong> Berhasil mengirim ulasan</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');

		$this->Komentar_model->insertDataKomentar($ArrayInsert);
		// redirect(base_url('komentar/index'));
		redirect(base_url('landing_page/detail_faskes/' . $faskes_id), 'refresh');
		// redirect($_SERVER['REQUEST_URI'], 'refresh');
	}

	public function edit_Komentar($id)
	{
		$queryKomentarDetail = $this->Komentar_model->getDataKomentarDetail($id);
		$queryAllFaskes = $this->Komentar_model->getDataFaskes();

		// echo "<pre>";
		// print_r($queryMahasiswaDetail);
		// echo "</pre>";

		$data = array(
			'queryDetailKomentar' => $queryKomentarDetail,
			'queryAllFaskes' => $queryAllFaskes
		);
		$this->load->view('project_faskes/komentar/edit_komentar', $data);
	}

	public function fungsi_edit_komentar()
	{
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		$users_id = $this->input->post('users_id');
		$faskes_id = $this->input->post('faskes_id');
		$nilai_rating_id = $this->input->post('nilai_rating_id');

		$ArrayUpdate = array(
			'id' => $id,
			'tanggal' => $tanggal,
			'isi' => $isi,
			'users_id' => $users_id,
			'faskes_id' => $faskes_id,
			'nilai_rating_id' => $nilai_rating_id
		);

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";

		$this->Komentar_model->updateDataKomentar($id, $ArrayUpdate);
		redirect(base_url('project_faskes/komentar/index'));
	}

	public function delete_komentar($id)
	{
		$queryAllKomentar = $this->Komentar_model->getDataKomentarDetail($id);


		$this->session->set_flashdata('message', '    <div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success!</strong> Berhasil menghapus ulasan</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');

		// print_r($queryAllKomentar->faskes_id);
		// die;
		$this->Komentar_model->deleteDataKomentar($id);

		// redirect(site_url('landing_page/detail_faskes/') . $queryAllKomentar->faskes_id);
		redirect($_SERVER['HTTP_REFERER']);

		// redirect($_SERVER['REQUEST_URI'], 'refresh');
	}
}
