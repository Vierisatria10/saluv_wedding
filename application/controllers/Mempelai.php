<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mempelai extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
		// $this->load->model('UserModel', 'user');
		$this->load->model('MempelaiModel', 'mempelai');
	}

    private $path_foto = './uploads/mempelai/';

	public function index()
	{
        $data['title'] = 'Mempelai - SaluvWedding';
        // $data['total_kategori'] = $this->dashboard->get_kategori();
        // $data['total_menu'] = $this->dashboard->get_menu();
        $data['get_mempelai'] = $this->mempelai->get_mempelai()->result();
        // $data['total_customer'] = $this->dashboard->get_customer();
		$this->template->load('layouts/main', 'admin/mempelai/v_mempelai', $data);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama Mempelai', 'required',
            array('required' => 'Nama Mempelai Wajib Diisi')
        );
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required',
            array('required' => 'Keterangan Wajib Diisi')
        );
        $this->form_validation->set_rules('ayah', 'Ayah', 'required',
            array('required' => 'Nama Ayah Wajib Diisi')
        );
        $this->form_validation->set_rules('ibu', 'Ibu', 'required',
            array('required' => 'Nama Ibu Wajib Diisi')
        );
        
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Mempelai - SaluvWedding';
            $data['get_mempelai'] = $this->mempelai->get_mempelai()->result();
            $this->template->load('layouts/main', 'admin/mempelai/tambah', $data);
        }else{
            $config['upload_path']          = './uploads/mempelai/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('warning', 'Gambar anda belum ditambahkan ');
                redirect('mempelai');
            }else{
                $nama = htmlspecialchars($this->input->post('nama'));
                $keterangan = htmlspecialchars($this->input->post('keterangan'));
                $ayah = htmlspecialchars($this->input->post('ayah'));
                $ibu  = htmlspecialchars($this->input->post('ibu'));
                $image = $this->upload->data();
                $image = $image['file_name'];

                $data = array(
                    'nama' => $nama,
                    'ket' => $keterangan,
                    'ayah'  => $ayah,
                    'image' => $image,
                    'ibu'   => $ibu,
                );

                $this->mempelai->insert($data, 'tbl_mempelai');
                $this->session->set_flashdata('success', 'Data Mempelai berhasil disimpan!');
                redirect('mempelai');
            }
        }
       
    }

    public function edit()
    {
        $id_mempelai = $this->uri->segment(3);
        $data['title']       = 'Edit Mempelai - SaluvWedding';
        $data['index']       = 2;
        $data['title_crumb'] = 'Edit Mempelai';
        $data['crumb']       = 'Edit Agama';

        $where = array('id_mempelai' => $id_mempelai);
        $data['get_mempelai'] = $this->mempelai->get_mempelai()->result();
        $data['edit_mempelai'] = $this->mempelai->edit($where, 'tbl_mempelai')->result();

        $this->template->load('layouts/main', 'admin/mempelai/edit', $data);
    }

    public function update()
    {
        $nama = htmlspecialchars($this->input->post('nama'));
        $keterangan = htmlspecialchars($this->input->post('keterangan'));
        $ayah = htmlspecialchars($this->input->post('ayah'));
        $ibu  = htmlspecialchars($this->input->post('ibu'));
        $remove_photo = $this->input->post('remove_photo');

        if ($remove_photo) {
            if(file_exists('uploads/mempelai/'. $remove_photo) && $remove_photo)
                unlink('uploads/mempelai/'. $remove_photo);
            $data['image'] = '';
        }

        $edit_foto = 'image';
        if ($_FILES[$edit_foto]['name']) {
            if ($this->fileupload($this->path_foto, $edit_foto)) {
                $editdatafoto = $this->$edit_foto->data('file_name');
                $uploadfoto = $editdatafoto;
            }else{
                $this->session->set_flashdata('error', $this->$edit_foto->display_errors());
                redirect(site_url('mempelai'));
            }
            
            $id_mempelai = $this->input->post('id_mempelai');
            $edit = $this->mempelai->get_by_id($id_mempelai);
            $basename = basename($edit->image);
            if(file_exists('uploads/mempelai/'.$basename) && $basename)
                unlink('uploads/mempelai/'.$basename);
        }

        $data = array(
            'nama' => $nama,
            'ket'  => $keterangan,
            'ayah' => $ayah,
            'ibu'  => $ibu,
            'image' => $uploadfoto
        );

        $id_update = $this->input->post('id_mempelai');
        $this->mempelai->update($id_update, $data);
        $this->session->set_flashdata('update', 'Data Mempelai Berhasil diubah!');
        redirect('mempelai');
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

    public function delete()
    {
        $id_mempelai = $this->input->post('id_mempelai');
        $where = array('id_mempelai' => $id_mempelai);
        $this->mempelai->delete($where, 'tbl_mempelai');
        redirect('mempelai');
    }
}