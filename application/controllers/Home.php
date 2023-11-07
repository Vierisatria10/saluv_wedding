<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// if($this->session->userdata('logged_in') !== TRUE){
		//   redirect('login');
		// }
		$this->load->model('HomeModel', 'home');
		$this->load->model('JadwalModel', 'jadwal');
		$this->load->model('MempelaiModel', 'mempelai');
		$this->load->model('AmplopModel', 'amplop');
		$this->load->model('CeritaModel', 'cerita');
		$this->load->model('GaleriModel', 'galeri');
	}

	public function index()
	{
        $data['title'] = 'The Wedding of Vieri & Rere';
		$data['get_jadwal'] = $this->jadwal->get_jadwal()->result();
		$data['get_mempelai'] = $this->mempelai->get_mempelai()->result();
		$data['get_ucapan']	= $this->home->get_ucapan()->result();
		$data['get_cerita']	= $this->cerita->get_cerita()->result();
		$data['get_amplop'] = $this->amplop->get_amplop();
		$data['get_galeri'] = $this->galeri->get_galeri()->result();
		$this->load->view('v_home', $data);
	}

	public function kirim()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required',
			array('required' => 'Nama Wajib Diisi')
		);
		$this->form_validation->set_rules('status', 'Kehadiran', 'required',
			array('required' => 'Kehadiran Wajib Diisi')
		);
		$this->form_validation->set_rules('pesan', 'Pesan', 'required',
			array('required' => 'Pesan Wajib Diisi')
		);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'The Wedding of Vieri & Rere';
			$data['get_jadwal'] = $this->jadwal->get_jadwal()->result();
			$data['get_mempelai'] = $this->mempelai->get_mempelai()->result();
			$data['get_ucapan']	= $this->home->get_ucapan()->result();
			$data['get_galeri'] = $this->galeri->get_galeri()->result();
			$this->load->view('v_home', $data);
		}else{
			$nama = $this->input->post('nama');
			$status = $this->input->post('status');
			$pesan = $this->input->post('pesan');

			$data = array(
				'nama' => $nama,
				'status' => $status,
				'ucapan_doa'  => $pesan
			);

			$this->home->insert_data($data);
			$this->session->set_flashdata('success', 'Berhasil Simpan Ucapan, terimakasih telah mengucapkan kami..!');
			redirect('home');
		}
	}
}
