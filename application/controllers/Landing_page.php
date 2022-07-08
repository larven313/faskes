<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Landing_page extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Faskes_model');
        $this->load->model('Jenis_Faskes_model');
        $this->load->model('Komentar_model');
    }
    public function index()
    {
        $data['faskes'] = $this->Faskes_model->FaskesUser()->result();
        // $this->load->view('header');

        $this->load->view('layouts/header_index');
        $this->load->view('landing/crud_faskes', $data);
        $this->load->view('layouts/footer');
    }
    public function detail_faskes($id)
    {
        // $queryFaskesDetail = $this->Faskes_model->getDataFaskesDetail($id);
        $queryFaskesViewDetail = $this->Faskes_model->getDataFaskesViewDetail($id)->result();
        $queryAllKomentar = $this->Komentar_model->allKomentar($id)->result();
        $this->session->set_userdata('faskes_id', $id);

        $data = array(
            'detailFaskes' => $queryFaskesViewDetail,
            'allKomentar' => $queryAllKomentar,
            'id' => $id
        );

        // print_r($id);
        // die;
        // $this->load->view('landing/detail_faskes' . $id == null ? $id : "", $data);
        $this->load->view('layouts/header_index');
        $this->load->view('landing/detail_faskes', $data);
        $this->load->view('layouts/footer');
    }
    public function fungsi_create_komentar($id)
    {
        if ($this->session->has_userdata('id') == null) {
            $this->session->set_flashdata('message', '    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white "><i class="fa-solid fa-circle-exclamation"></i></span>
            <span class="alert-text text-white "><strong>Warning !</strong> Login terlebih dahulu !</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
            redirect('user');
        } else {
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
            // redirect(base_url('landing_page/detail_faskes/' . $faskes_id), 'refresh');
            // redirect($_SERVER['REQUEST_URI'], 'refresh');


            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function about()
    {
        $this->load->view('layouts/header_index');
        $this->load->view('landing/about');
        $this->load->view('layouts/footer');
    }

    public function profile($id)
    {

        $queryAllKomentar = $this->Komentar_model->myKomentar($id)->result();
        $profile = $this->User_model->getDataUserDetail($id);



        // echo "<pre>";
        // print_r($profile);
        // echo "</pre>";
        // die;

        $this->load->view('layouts/header_index');
        $this->load->view('landing/profile', [
            'komentar' => $queryAllKomentar,
            'user' => $profile
        ]);
        $this->load->view('layouts/footer');
    }

    public function fungsi_edit_user()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $status = 1;

        $ArrayUpdate = array(
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'role' => $role,
            'status' => $status
        );

        // echo "<pre>";
        // print_r($ArrayInsert);
        // echo "</pre>";

        $this->User_model->updateDataUser($id, $ArrayUpdate);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
