<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerita extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
		// $this->load->model('UserModel', 'user');
		$this->load->model('CeritaModel', 'cerita');
	}

    public function index()
	{
        $data['title'] = 'Cerita Cinta - SaluvWedding';
        // $data['total_mempelai'] = $this->dashboard->get_mempelai();
        // $data['total_jadwal'] = $this->dashboard->get_jadwal();
        // $data['get_amplop'] = $this->amplop->get_amplop();
		$this->template->load('layouts/main', 'admin/cerita/v_cerita', $data);
	}
	
	public function get_data_cerita()
	{
		$list = $this->cerita->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->judul;
			$row[] = $field->tanggal;
			$row[] = $field->keterangan;

            if ($field->foto)
                $row[] = '<a href="'.base_url('./uploads/cerita/').$field->foto.'" target="_blank" data-id="'. $field->id_cerita .'">
                         <img src="'.base_url('./uploads/cerita/').$field->foto.'" class="img-fluid" width="100" /></a>';
            else 
                $row[] = '<img src="'.base_url('assets/img/no_photo.png').'" class="img-fluid" width="100"" />';

            $aksi = '
            <div class="dropdown d-flex justify-content-center">
                <button class="btn btn-primary btn-block btn-sm dropdown-toggle" type="button" id="Menuid" data-bs-toggle="dropdown" aria-expanded="false"
                    <i class="fa fa-cog mr-1">Pilih Aksi</i>
                </button>
                <div class="dropdown-menu"> 
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item mx-2" href="javascript:void()" title="Detail" onclick="detail_cerita('."'".$field->id_cerita."'".')"><i class="fa fa-eye fa-lg mx-1"></i> Detail Cerita</a>
                            <a class="dropdown-item mx-2 btn_form_edit" href="javascript:void()" title="Edit" onclick="edit_cerita('."'".$field->id_cerita."'".')"><i class="fa fa-edit fa-lg mx-1"></i> Edit Cerita</a>
                            <a class="dropdown-item mx-2" href="javascript:void(0)" title="Hapus" onclick="delete_cerita('."'".$field->id_cerita."'".')"><i class="fa fa-trash fa-lg mx-1"></i> Hapus Cerita</a>
                        </div>
                    </div>
                </div>
            </div>
            ';
            $row[] = $aksi;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->cerita->count_all(),
            "recordsFiltered" => $this->cerita->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	public function simpan_cerita()
	{
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'judul' => $judul,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan
		);

		if (!empty($_FILES['foto']['name'])) {
            $upload = $this->_do_upload();
            $data['foto'] = $upload;
        }

		$insert = $this->cerita->insert_cerita($data);
		if ($insert) {
			$response = [
				'status' => 'success',
				'message' => 'Data Cerita Berhasil DiSimpan'
			];
			echo json_encode($response);
		}else{
			$response = [
				'status' => 'error',
				'message' => 'Data Cerita Gagak DiSimpan'
			];
			echo json_encode($response);
		}
	}

	public function edit_cerita($id_cerita)
    {
        $edit_cerita = $this->cerita->get_by_id($id_cerita);
        $data['edit_cerita'] = $edit_cerita;
        echo json_encode($data);
    }

	public function delete_cerita($id_cerita)
    {
        $app = $this->cerita->get_by_id($id_cerita);
        $basename = basename($app->foto);
        if (file_exists('uploads/cerita/'. $basename) && $basename)
            unlink('uploads/cerita/'. $basename);
        $this->cerita->delete($id_cerita);
        echo json_encode(array("status" => TRUE));
    }

	private function _do_upload()
    {
        $config['upload_path']          = 'uploads/cerita/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
     
        $this->load->library('upload', $config);
     
        if(!$this->upload->do_upload('foto')) //upload and validate
        {
            $data['inputerror'][] = 'foto';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
}