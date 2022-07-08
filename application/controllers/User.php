<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model', 'user');
    }


    public function data_user()
    {

        $perpage = 5;

        $offset = html_escape($this->input->get('per_page'));



        $config['base_url'] = site_url('/user/data_user');
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->user->getAll()->num_rows();
        $config['per_page'] = $perpage;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;

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

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['no'] = ($page == 0 ? 1 : (($page - 1) * $config["per_page"] + 1));

        $this->pagination->initialize($config);
        $data['ar_user'] = $this->user->getDataUser($perpage, $offset)->result();
        $this->session->set_userdata('menu', 'user');
        $session['menu'] = $this->session->userdata('menu');

        $this->load->view('layouts/header', $session);
        $this->load->view('user/crud_user', $data);
        $this->load->view('layouts/footer');
    }


    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Tidak Boleh Kosong !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/header_index');
            $this->load->view('user/login_user');
            $this->load->view('layouts/footer');
        } else {
            // _ = penanda private
            $this->_login();
        }
    }

    public function create()
    {
        $this->session->set_userdata('menu', 'user');
        $session['menu'] = $this->session->userdata('menu');

        $this->load->view('layouts/header', $session);
        $this->load->view('user/create_user');
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'email ini sudah terdaftar!!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]', [
            'min_length' => 'password-nya terlalu pendek'
        ]);


        if ($this->form_validation->run() == false) {

            $this->load->library('form_validation');
            $this->load->view('user/create_user');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => htmlspecialchars($this->input->post('role', true)),
                'status' => $this->input->post('status')

            ];

            $this->db->insert('users', $data);
            //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            //    Berhasil menambahkan akun
            //   </div>');

            redirect('user/data_user');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'email ini sudah terdaftar!!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]', [
            'min_length' => 'password-nya terlalu pendek'
        ]);


        if ($this->form_validation->run() == false) {

            $this->load->library('form_validation');
            $this->load->view('layouts/header_index');
            $this->load->view('user/registrasi');
            $this->load->view('layouts/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => md5($this->input->post('password1')),
                'role' => 'public',
                'status' => 1

            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
            <span class="alert-text text-white "><strong>Success !</strong> Berhasil Membuat Akun</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

            redirect('user/index');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        // cek data login
        // var_dump($user);
        // die;

        // jika usernya ada
        if ($user) {
            if ($user['status'] == 1) {
                if ($user['password'] == md5($password)) {
                    $data = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];
                    // var_dump($data);

                    $this->session->set_userdata($data);
                    if ($user['role'] == 'administrator') {

                        $this->user->_update_last_login($user['id']);

                        $this->session->set_userdata($data);

                        $this->session->set_flashdata('message', '    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white "><strong>Success!</strong> Berhasil login</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                         </div>');
                        redirect('faskes/index', $data);
                    } else {
                        $this->session->set_flashdata('message', '    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white "><strong>Success!</strong> Berhasil login</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                        redirect('/');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-white font-weight-bold" role="alert">
                    Password Salah !
                  </div>');
                    redirect('user/index');
                }
            } else {
                $this->session->set_flashdata('message', '    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon text-white "><i class="fa-solid fa-circle-exclamation"></i></span>
                <span class="alert-text text-white "><strong>Warning !</strong> Akun telah dinonaktifkan</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');

                redirect('user/index');
            }
        } else {
            $this->session->set_flashdata('message', '    <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white "><i class="fa-solid fa-circle-exclamation"></i></span>
            <span class="alert-text text-white "><strong>Notice !</strong> Akun belum terdaftar!</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

            redirect('user/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon text-white "><i class="ni ni-like-2"></i></span>
        <span class="alert-text text-white "><strong>Success !</strong> Berhasil Logout!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');

        redirect('user/index');
    }
}
