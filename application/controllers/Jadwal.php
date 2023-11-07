<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
		// $this->load->model('UserModel', 'user');
		$this->load->model('JadwalModel', 'jadwal');
	}

	public function index()
	{
        $data['title'] = 'Jadwal - SaluvWedding';
        // $data['total_kategori'] = $this->dashboard->get_kategori();
        // $data['total_menu'] = $this->dashboard->get_menu();
        $data['get_jadwal'] = $this->jadwal->get_jadwal()->result();
        // $data['total_customer'] = $this->dashboard->get_customer();
		$this->template->load('layouts/main', 'admin/jadwal/v_jadwal', $data);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required',
            array('required' => 'Judul Wajib Diisi')
        );
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',
            array('required' => 'Alamat Wajib Diisi')
        );
        $this->form_validation->set_rules('hari', 'Hari', 'required',
            array('required' => 'Hari Wajib Diisi')
        );
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required',
            array('required' => 'Tanggal Wajib Diisi')
        );
        $this->form_validation->set_rules('jam', 'Jam', 'required',
            array('required' => 'Jam Wajib Diisi')
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Jadwal - SaluvWedding';
            // $data['title_crumb'] = 'Tambah Agama';
            // $data['crumb']       = 'Tambah Agama';
            $data['get_jadwal'] = $this->jadwal->get_jadwal()->result();
            $this->template->load('layouts/main', 'admin/jadwal/v_jadwal', $data);
        } else {
            $judul = $this->input->post('judul');
            $alamat = $this->input->post('alamat');
            $hari = $this->input->post('hari');
            $tanggal = $this->input->post('tanggal');
            $jam = $this->input->post('jam');
            $link_maps = $this->input->post('link_maps');

            $data = [
                'judul' => $judul,
                'alamat' => $alamat,
                'hari' => $hari,
                'tanggal' => $tanggal,
                'jam' => $jam,
                'link_maps' => $link_maps
            ];

            $this->jadwal->insert($data, 'tbl_jadwal');
            $this->session->set_flashdata('success', 'Data Jadwal berhasil disimpan!');
            redirect('jadwal');
        }

    }

    public function edit()
    {
        $id_jadwal = $this->uri->segment(3);
        $data['title']       = 'Edit Jadwal - SaluvWedding';
        $data['index'] = 2;
        $data['title_crumb'] = 'Edit Jadwal';
        $data['crumb']       = 'Edit Agama';

        $where = array('id_jadwal' => $id_jadwal);
        $data['get_jadwal'] = $this->jadwal->get_jadwal()->result();
        $data['edit_jadwal'] = $this->jadwal->edit($where, 'tbl_jadwal')->result();

        $this->template->load('layouts/main', 'admin/jadwal/edit', $data);
    }

    public function update()
    {
        $id_jadwal  = $this->input->post('id_jadwal');
        $judul      = $this->input->post('judul');
        $alamat     = $this->input->post('alamat');
        $hari       = $this->input->post('hari');
        $tanggal    = $this->input->post('tanggal');
        $jam        = $this->input->post('jam');
        $link_maps  = $this->input->post('link_maps');

        $data = array(
            'judul' => $judul,
            'alamat' => $alamat,
            'hari' => $hari,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'link_maps' => $link_maps
        );

        $where = array(
            'id_jadwal' => $id_jadwal
        );

        $this->jadwal->update($where, $data, 'tbl_jadwal');
        $this->session->set_flashdata('update', 'Data Jadwal Berhasil diubah!');
        redirect('jadwal');
    }

    public function delete()
    {
        $id_jadwal = $this->input->post('id_jadwal');
        $where = array('id_jadwal' => $id_jadwal);
        $this->jadwal->delete($where, 'tbl_jadwal');
        redirect('jadwal');
    }
}
