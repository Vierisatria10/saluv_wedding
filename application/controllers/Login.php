<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('LoginModel', 'login');
        // $this->load->model('UserModel', 'user');
    }

	public function index()
	{
        $data['title'] = 'Login - SaluvWedding';
		$this->load->view('admin/auth/v_login', $data);
	}

	public function auth()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $validate = $this->login->validate($username, $password);

        if ($validate->num_rows() > 0) {
            $data = $validate->row_array();
            $nama = $data['nama'];
            $username = $data['username'];
			$email = $data['email'];
            $level = $data['level'];
            $foto = $data['foto'];
            $password = md5($data['password']);

            $session_data = array(
                'nama' => $nama,
				'email' => $email,
                'username' => $username,
                'level' => $level,
                'foto'  => $foto,
                'logged_in' => TRUE
            );
            // print_r($session_data);exit;
            $this->session->set_userdata($session_data);
            // acces login for admin
            if ($level === '1') {
                echo $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <h4><i class="icon fa fa-check"></i> Berhasil</h4>
                    Selamat Datang di Website Saluv Wedding Anda Berhasil Login Sebagai <b>'. $nama .'</b>
                </div>');
                redirect('dashboard');
            }else if($level === '2') {
                echo $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Berhasil</h4>
                    Selamat Datang di Website Pendaftaran Wisuda Anda Berhasil Login Sebagai <b>'. $nama .'</b>
                </div>');
                redirect('dashboard/user');
            }
        }else{
            echo $this->session->set_flashdata('pesan', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Username atau Password Salah
            </div>');
            redirect('Login');
        }
    }

	public function logout()
    {
        $this->session->sess_destroy();
        echo $this->session->set_flashdata('msg', '
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Terimakasih Anda Sudah Logout.
        </div>
        ');
        redirect('login');
    }
}
