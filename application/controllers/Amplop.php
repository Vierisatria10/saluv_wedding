<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amplop extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
		// $this->load->model('UserModel', 'user');
		$this->load->model('AmplopModel', 'amplop');
	}

    private $path_foto = './uploads/amplop/';

	public function index()
	{
        $data['title'] = 'Amplop Undangan - SaluvWedding';
        // $data['total_mempelai'] = $this->dashboard->get_mempelai();
        // $data['total_jadwal'] = $this->dashboard->get_jadwal();
        $data['get_amplop'] = $this->amplop->get_amplop();
		$this->template->load('layouts/main', 'admin/amplop/v_amplop', $data);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('no_hp_rek', 'No Rek/Hp', 'required',
            array('required' => 'No Rekening/Hp Wajib Diisi')
        );
        $this->form_validation->set_rules('nama', 'Nama', 'required',
            array('required' => 'Nama Wajib Diisi')
        );
        
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Amplop Undangan - SaluvWedding';
            $data['get_amplop'] = $this->amplop->get_amplop();
		    $this->template->load('layouts/main', 'admin/amplop/v_amplop', $data);
        }else{

            $no_hp_rek = $this->input->post('no_hp_rek');
            $nama = $this->input->post('nama');

            $foto = 'foto';
            if ($_FILES[$foto]['name']) {
                if ($this->fileupload($this->path_foto, $foto)) {
                    $datafoto = $this->$foto->data('file_name');
                    $uploadfoto = $datafoto; 
                }else{
                    $this->session->set_flashdata('error', $this->$foto->display_errors());
                    redirect(site_url('amplop'));
                }
            }

            $data = array(
                'no_hp_rek' => $no_hp_rek,
                'nama'      => $nama,
                'foto'      => $uploadfoto
            );

            $this->amplop->insert($data, 'tbl_amplop');
            $this->session->set_flashdata('success', 'Data Amplop Undangan berhasil disimpan!');
            redirect('amplop');
    
        }
        
    }

    public function edit()
    {
        $id_amplop = $this->uri->segment(3);
        $data['title']       = 'Edit Amplop - SaluvWedding';
        $data['index'] = 2;
        $data['title_crumb'] = 'Edit Jadwal';
        $data['crumb']       = 'Edit Agama';

        $where = array('id_amplop' => $id_amplop);
        $data['get_amplop'] = $this->amplop->get_amplop();
        $data['edit_amplop'] = $this->amplop->edit($where, 'tbl_amplop')->result();

        $this->template->load('layouts/main', 'admin/amplop/edit', $data);
    }

    public function update()
    {

    }

    public function delete()
    {
        $id_amplop = $this->input->post('id_amplop');
        $app = $this->amplop->get_by_id($id_amplop);
        // $where = array('id_amplop' => $id_amplop);
        $basename = basename($app->foto);
        if (file_exists('uploads/amplop/'. $basename) && $basename)
            unlink('uploads/amplop/'. $basename);
        $this->amplop->delete($id_amplop);
        redirect('amplop');
    }
    
    public function fileupload($path,$file){
		$config=array(
			'upload_path'=>$path,
			'allowed_types'=>'JPG|jpeg|jpg|png',
			'max_size'=>5000, //5MN
			'encrypt_name'=>false, //ENCTYPT
		);
		$this->load->library('upload',$config,$file);
		return $this->$file->do_upload($file);
	}
}