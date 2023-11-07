<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ucapan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
		$this->load->model('HomeModel', 'home');
        $this->load->model('UcapanModel', 'ucapan');
	}

	public function index()
	{
        $data['title'] = 'The Wedding of Vieri & Rere';
		$data['get_ucapan']	= $this->home->get_ucapan()->result();
        $this->template->load('layouts/main', 'admin/ucapan/v_ucapan', $data);
	}

	public function export()
	{
		$query = [
			'nama_file' => 'Ucapan & Doa',
			'headline'	=> 'Ucapan & Doa SaluvWedding',
			'data'		=> $this->ucapan->read_excel()->result()
		];

		$this->load->view('admin/ucapan/export', $query);
	}

    public function delete()
    {
        $id_ucapan = $this->input->post('id_ucapan');
        $where = array('id_ucapan' => $id_ucapan);
        $this->ucapan->delete($where, 'tbl_ucapan');
        redirect('ucapan');
    }
}