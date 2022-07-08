<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Faskes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'administrator') {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white "><i class="fa-solid fa-circle-exclamation"></i></span>
            <span class="alert-text text-white "><strong>Danger !</strong> Akses ditolak !</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
			redirect('/');
		}
		$this->load->model('User_model');
		$this->load->model('Faskes_model');
		$this->load->model('Jenis_Faskes_model');
		$this->load->model('Kecamatan_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		$perpage = 5;

		$offset = html_escape($this->input->get('per_page'));



		$config['base_url'] = site_url('/faskes');
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Faskes_model->getAll()->num_rows();
		$config['per_page'] = $perpage;
		// $offset = $this->uri->segment(1);
		$config['full_tag_open']    = '<ul class="pagination ml-5">';
		$config['full_tag_close']   = '</ul>';
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['first_tag_open']   = '<li class="page-item page-link">';
		$config['first_tag_close']  = '</li>';
		$config['prev_link']        = '&laquo';
		$config['prev_tag_open']    = '<li class="page-item page-link">';
		$config['prev_tag_close']   = '</li>';
		$config['next_link']        = '&raquo';
		$config['next_tag_open']    = '<li class="page-item page-link">';
		$config['next_tag_close']   = '</li>';
		$config['last_tag_open']    = '<li class="page-item page-link">';
		$config['last_tag_close']   = '</li>';
		$config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
		$config['cur_tag_close']    = '</a></li>';
		$config['num_tag_open']     = '<li class="page-item page-link">';
		$config['num_tag_close']    = '</li>';

		$this->pagination->initialize($config);
		$this->session->set_userdata('menu', 'faskes');



		$session['menu'] = $this->session->userdata('menu');
		$session['username'] = $this->session->userdata('username');
		$data['queryAllFaskes'] = $this->Faskes_model->join3table($perpage, $offset)->result();

		$this->load->view('layouts/header', $session);
		$this->load->view('faskes/crud_faskes', $data);
		$this->load->view('layouts/footer');
	}

	public function create_faskes()
	{
		$queryAllKecamatan = $this->Kecamatan_model->getDataKecamatan();
		$queryAllJenis_Faskes = $this->Jenis_Faskes_model->getDataJenis_Faskes();

		// echo "<pre>";
		// print_r($queryMahasiswaDetail);
		// echo "</pre>";

		$data = array(
			'queryAllKecamatan' => $queryAllKecamatan,
			'queryAllJenis_Faskes' => $queryAllJenis_Faskes
		);

		$this->session->set_userdata('menu', 'faskes');

		$session['menu'] = $this->session->userdata('menu');

		$this->load->view('layouts/header', $session);
		$this->load->view('faskes/create_faskes', $data);
		$this->load->view('layouts/footer');
	}

	public function fungsi_create_faskes()
	{

		// if (isset($_POST['submit'])) {

		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$latlong = $this->input->post('latlong');
		$jenis_id = $this->input->post('jenis_id');
		$deskripsi = $this->input->post('deskripsi');
		$skor_rating = $this->input->post('skor_rating');
		$kecamatan_id = $this->input->post('kecamatan_id');
		$website = $this->input->post('website');
		$jumlah_dokter = $this->input->post('jumlah_dokter');
		$jumlah_pegawai = $this->input->post('jumlah_pegawai');

		$config['upload_path']		= 'assets/images/foto1_faskes';
		$config['allowed_types']	= 'jpg|png|gif';
		$config['encrypt_name']		= TRUE;
		$this->load->library('upload', $config);

		if (!empty($_FILES['foto1'])) {
			$this->upload->do_upload('foto1');
			$data1 = $this->upload->data();
			$foto1 = $data1['file_name'];
		}

		if (!empty($_FILES['foto2'])) {
			$this->upload->do_upload('foto2');
			$data2 = $this->upload->data();
			$foto2 = $data2['file_name'];
		}

		if (!empty($_FILES['foto3'])) {
			$this->upload->do_upload('foto3');
			$data3 = $this->upload->data();
			$foto3 = $data3['file_name'];
		}

		// var_dump($foto1);




		$ArrayInsert = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'latlong' => $latlong,
			'jenis_id' => $jenis_id,
			'deskripsi' => $deskripsi,
			'skor_rating' => $skor_rating,
			'kecamatan_id' => $kecamatan_id,
			'website' => $website,
			'jumlah_dokter' => $jumlah_dokter,
			'jumlah_pegawai' => $jumlah_pegawai,
			'foto1' => $foto1,
			'foto2' => $foto2,
			'foto3' => $foto3,
		);
		// var_dump($ArrayInsert);

		$this->Faskes_model->insertDataFaskes($ArrayInsert);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Membuat Faskes</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');
		redirect(base_url('faskes/index'));


		// } else 
		// {
		// 	echo 'gagal upload data';
		// }
	}

	public function edit_faskes($id)
	{

		$queryFaskesDetail = $this->Faskes_model->getDataFaskesDetail($id);
		$queryAllFaskes = $this->Faskes_model->getDataFaskes();
		$queryAllKecamatan = $this->Kecamatan_model->getDataKecamatan();
		$queryAllJenis_Faskes = $this->Jenis_Faskes_model->getDataJenis_Faskes();
		$queryFaskesViewDetail = $this->Faskes_model->detailFaskes($id);



		$data = array(
			'joinFaskes' => $queryFaskesViewDetail,
			'queryDetailFaskes' => $queryFaskesDetail,
			'queryAllFaskes' => $queryAllFaskes,
			'queryAllKecamatan' => $queryAllKecamatan,
			'queryAllJenis_Faskes' => $queryAllJenis_Faskes
		);

		// echo "<pre>";
		// var_dump($queryFaskesViewDetail);
		// echo "</pre>";
		$this->session->set_userdata('menu', 'faskes');

		$session['menu'] = $this->session->userdata('menu');

		$this->load->view('layouts/header', $session);
		$this->load->view('faskes/edit_faskes2', $data);
		$this->load->view('layouts/footer');
	}

	public function fungsi_edit_faskes()
	{
		// if (isset($_POST['submit'])) {
		$foto_lama1 = $this->input->post('foto_lama1');
		$foto_lama2 = $this->input->post('foto_lama2');
		$foto_lama3 = $this->input->post('foto_lama3');
		$id = $this->input->post('id');

		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$latlong = $this->input->post('latlong');
		$jenis_id = $this->input->post('jenis_id');
		$deskripsi = $this->input->post('deskripsi');
		$skor_rating = $this->input->post('skor_rating');
		$kecamatan_id = $this->input->post('kecamatan_id');

		$website = $this->input->post('website');
		$jumlah_dokter = $this->input->post('jumlah_dokter');
		$jumlah_pegawai = $this->input->post('jumlah_pegawai');

		$path = 'assets/images/foto1_faskes/';
		$config['upload_path']		= $path;
		$config['allowed_types']	= 'jpg|png|gif';
		$config['encrypt_name']		= TRUE;

		$this->load->library('upload', $config);
		// if ($foto_lama1 != null) {
		// }

		// if ($foto_lama2 != null) {
		// }

		// if ($foto_lama3 != null) {
		// }
		// if ($_FILES['foto1'] != null) {

		// 	$this->upload->do_upload('foto1');
		// 	$data1 = $this->upload->data();
		// 	$foto1 = $data1['file_name'];
		// 	unlink($path . $foto_lama1);
		// } else {
		// 	// $this->upload->do_upload($foto_lama1);
		// 	// $data1 = $this->upload->data();
		// 	// $foto1 = $data1['file_name'];
		// 	$foto1 = $foto_lama1;
		// }

		// if ($_FILES['foto2'] != null) {

		// 	$this->upload->do_upload('foto2');
		// 	$data2 = $this->upload->data();
		// 	$foto2 = $data2['file_name'];
		// 	unlink($path . $foto_lama2);
		// } else {
		// 	$foto2 = $foto_lama2;
		// }

		// if ($_FILES['foto3'] != null) {
		// 	$this->upload->do_upload('foto3');
		// 	$data3 = $this->upload->data();
		// 	$foto3 = $data3['file_name'];
		// 	// $ArrayUpdate['foto3'] = $foto3;

		// 	unlink($path . $foto_lama3);
		// } else {
		// 	$foto3 = $foto_lama3;
		// }
		// var_dump($_FILES['foto3']);

		$this->upload->initialize($config);

		$data = array();

		if ($this->upload->do_upload('foto1')) {
			$dataInfo = $this->upload->data();
			$foto1 = $dataInfo['file_name'];
			unlink($path . $foto_lama1);
		} else {
			$foto1 = $foto_lama1;
		}

		if ($this->upload->do_upload('foto2')) {
			$dataInfo = $this->upload->data();
			$foto2 = $dataInfo['file_name'];
			unlink($path . $foto_lama2);
		} else {
			$foto2 = $foto_lama2;
		}

		if ($this->upload->do_upload('foto3')) {
			$dataInfo = $this->upload->data();
			$foto3 = $dataInfo['file_name'];
			unlink($path . $foto_lama3);
		} else {
			$foto3 = $foto_lama3;
		}


		$ArrayUpdate = array(
			'id' => $id,
			'nama' => $nama,
			'alamat' => $alamat,
			'latlong' => $latlong,
			'jenis_id' => $jenis_id,
			'deskripsi' => $deskripsi,
			'skor_rating' => $skor_rating,
			'kecamatan_id' => $kecamatan_id,
			'website' => $website,
			'jumlah_dokter' => $jumlah_dokter,
			'jumlah_pegawai' => $jumlah_pegawai,
			'foto1' => $foto1,
			'foto2' => $foto2,
			'foto3' => $foto3,
		);

		// if ($foto_lama != null) {
		// 	$ArrayUpdate['foto1'] = $foto1;
		// }

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Mengubah Faskes</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');

		// if ($this->Faskes_model->updateDataFaskes($id, $ArrayUpdate) == true) {
		// }
		$this->Faskes_model->updateDataFaskes($id, $ArrayUpdate);
		redirect(base_url('faskes/index'));

		// } else {
		// 	echo 'gagal upload data';
		// }
	}

	// public function fungsi_edit_faskes()
	// {
	// 	$id = $this->input->post('id');
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$latlong = $this->input->post('latlong');
	// 	$jenis_id = $this->input->post('jenis_id');
	// 	$deskripsi = $this->input->post('deskripsi');
	// 	$skor_rating = $this->input->post('skor_rating');
	// 	$kecamatan_id = $this->input->post('kecamatan_id');

	// 	$website = $this->input->post('website');
	// 	$jumlah_dokter = $this->input->post('jumlah_dokter');
	// 	$jumlah_pegawai = $this->input->post('jumlah_pegawai');

	// 	$foto1 = $_FILES['foto1'];
	// 	if ($foto1 = '') {
	// 		echo 'Gagal Update Di awal (foto 1)';
	// 	} else {
	// 		$config['upload_path']		= 'assets/images/foto1_faskes';
	// 		$config['allowed_types']	= 'jpg|png|gif';

	// 		$this->load->library('upload', $config);

	// 		if (!$this->upload->do_upload('foto1')) {
	// 			echo 'Update GAGAL (foto 1)' ;
	// 			die();
	// 		} else {
	// 			$foto1 = $this->upload->data('file_name');
	// 		}

	// 	}

	// 	$foto2 = $_FILES['foto2'];
	// 	if ($foto2 = '') {
	// 		echo 'Gagal Update Di awal (foto 2)';
	// 	} else {
	// 		$config['upload_path']		= 'assets/images/foto2_faskes';
	// 		$config['allowed_types']	= 'jpg|png|gif';

	// 		$this->load->library('upload', $config);

	// 		if (!$this->upload->do_upload('foto2')) {
	// 			echo 'Update GAGAL (foto 2)' ;
	// 			die();
	// 		} else {
	// 			$foto2 = $this->upload->data('file_name');
	// 		}

	// 	}

	// 	$foto3 = $_FILES['foto3'];
	// 	if ($foto3 = '') {
	// 		echo 'Gagal Update Di awal (foto 3)';
	// 	} else {
	// 		$config['upload_path']		= 'assets/images/foto3_faskes';
	// 		$config['allowed_types']	= 'jpg|png|gif';

	// 		$this->load->library('upload', $config);

	// 		if (!$this->upload->do_upload('foto3')) {
	// 			echo 'Update GAGAL (foto 3)' ;
	// 			die();
	// 		} else {
	// 			$foto3 = $this->upload->data('file_name');
	// 		}

	// 	}


	// 	$ArrayUpdate = array(
	// 		'id' => $id,
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'latlong' => $latlong,
	// 		'jenis_id' => $jenis_id,
	// 		'deskripsi' => $deskripsi,
	// 		'skor_rating' => $skor_rating,
	// 		'kecamatan_id' => $kecamatan_id,
	// 		'website' => $website,
	// 		'jumlah_dokter' => $jumlah_dokter,
	// 		'jumlah_pegawai' => $jumlah_pegawai,
	// 		'foto1' => $foto1,
	// 		'foto2' => $foto2,
	// 		'foto3' => $foto3,
	// 	);

	// 	// echo "<pre>";
	// 	// print_r($ArrayUpdate);
	// 	// echo "</pre>";

	// 	$this->Faskes_model->updateDataFaskes($id, $ArrayUpdate);
	// 	redirect(base_url('faskes/index'));
	// }

	public function detail_faskes($id)
	{
		// $queryFaskesDetail = $this->Faskes_model->getDataFaskesDetail($id);
		$queryFaskesViewDetail = $this->Faskes_model->getDataFaskesViewDetail($id)->result();

		$data = array(
			'queryDetailViewFaskes' => $queryFaskesViewDetail,
		);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->session->set_userdata('menu', 'faskes');

		$session['menu'] = $this->session->userdata('menu');

		$this->load->view('layouts/header', $session);
		$this->load->view('faskes/detail_faskes', $data);
		$this->load->view('layouts/footer');
	}

	public function delete_faskes($id)
	{
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
		<span class="alert-text text-white "><strong>Success !</strong> Berhasil Menghapus Faskes</span>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>');
		$this->Faskes_model->deleteDataFaskes($id);
		// print_r($id);
		redirect(base_url('faskes/index'));
	}
}
