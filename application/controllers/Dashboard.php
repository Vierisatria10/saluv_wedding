<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
		// $this->load->model('UserModel', 'user');
		$this->load->model('DashboardModel', 'dashboard');
	}

	public function index()
	{
        $data['title'] = 'Dashboard - SaluvWedding';
        $data['total_mempelai'] = $this->dashboard->get_mempelai();
        $data['total_jadwal'] = $this->dashboard->get_jadwal();
        $data['total_galeri'] = $this->dashboard->get_galeri();
		$data['total_hadir'] = $this->dashboard->get_hadir();
		$this->template->load('layouts/main', 'admin/dashboard/v_dashboard', $data);
	}

	public function user()
	{
        $data['title'] = 'Dashboard User - SaluvWedding';
        $data['total_mempelai'] = $this->dashboard->get_mempelai();
        $data['total_jadwal'] = $this->dashboard->get_jadwal();
        $data['total_galeri'] = $this->dashboard->get_galeri();
		$data['total_hadir'] = $this->dashboard->get_hadir();
		$this->template->load('layouts/main', 'user/dashboard/dashboard_user', $data);
	}
}
