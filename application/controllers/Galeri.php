<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
		$this->load->model('GaleriModel', 'galeri');
	}

	public function index()
	{
        $data['title'] = 'Galeri - SaluvWedding';
		$this->template->load('layouts/main', 'admin/galeri/v_galeri', $data);
	}

    public function get_data_galeri()
    {
        $list = $this->galeri->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach($list as $field) {
            $no++;
            $row = array();
            $row[] = "<input type=\"checkbox\" class=\"centangGaleri\" value=\"$field->id_galeri\" name=\"galeri[]\">";
            $row[] = $no;
            // $row[] = $field->tipe_aplikasi;
            if ($field->foto)
                $row[] = '<a href="'.base_url('./uploads/galeri/').$field->foto.'" target="_blank" data-id="'. $field->id_galeri .'">
                         <img src="'.base_url('./uploads/galeri/').$field->foto.'" class="img-fluid" width="100" /></a>';
            else 
                $row[] = '<img src="'.base_url('assets/img/no_photo.png').'" class="img-fluid" width="100"" />';
            $row[] = $field->created_update;

            $aksi = '
            <div class="dropdown d-flex justify-content-center">
                <button class="btn btn-primary btn-block btn-sm dropdown-toggle" type="button" id="Menuid" data-bs-toggle="dropdown" aria-expanded="false"
                    <i class="fa fa-cog mr-1">Pilih Aksi</i>
                </button>
                <div class="dropdown-menu"> 
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item mx-2" href="javascript:void()" title="Detail" onclick="detail_galeri('."'".$field->id_galeri."'".')"><i class="fa fa-eye fa-lg mx-1"></i> Detail Galeri</a>
                            <a class="dropdown-item mx-2 btn_form_edit" href="javascript:void()" title="Edit" onclick="edit_galeri('."'".$field->id_galeri."'".')"><i class="fa fa-edit fa-lg mx-1"></i> Edit Galeri</a>
                            <a class="dropdown-item mx-2" href="javascript:void(0)" title="Hapus" onclick="delete_galeri('."'".$field->id_galeri."'".')"><i class="fa fa-trash fa-lg mx-1"></i> Hapus Galeri</a>
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
            "recordsTotal" => $this->galeri->count_all(),
            "recordsFiltered" => $this->galeri->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function insert()
    {
        $countfiles = count($_FILES['files']['name']);
  
      for($i=0;$i<$countfiles;$i++){
  
        if(!empty($_FILES['files']['name'][$i])){
  
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];
 
          // Set preference
          $config['upload_path'] = './uploads/galeri/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $_FILES['files']['name'][$i];
  
          //Load upload library
          $this->load->library('upload',$config); 
          $arr = array('msg' => 'something went wrong', 'success' => false);
          // File upload
          if($this->upload->do_upload('file')){
           
           $data = $this->upload->data(); 
           $insert['foto'] = $data['file_name'];
           $this->db->insert('tbl_galeri',$insert);
           $get = $this->db->insert_id();
           $arr = array('msg' => 'Image has been uploaded successfully', 'success' => true);
 
          }
        }
  
      }
      echo json_encode($arr);
  
    }

    public function edit_galeri($id_galeri)
    {
        $edit_galeri = $this->galeri->get_by_id($id_galeri);
        $data['edit_galeri'] = $edit_galeri;
        echo json_encode($data);
    }

    public function detail_galeri($id_galeri)
    {
        $detail_galeri = $this->galeri->get_by_id($id_galeri);
        $data['detail_galeri'] = $detail_galeri;
        echo json_encode($data);
    }

    public function update_galeri()
    {
        $remove_photo = $this->input->post('remove_photo');

        if ($remove_photo) {
            if(file_exists('uploads/galeri/'. $remove_photo) && $remove_photo)
                unlink('uploads/galeri/'. $remove_photo);
            $data['foto'] = '';
        }

        $edit_foto = 'edit_foto';
        if ($_FILES[$edit_foto]['name']) {
            if ($this->fileupload($this->path_foto, $edit_foto)) {
                $editdatagambar = $this->$edit_foto->data('file_name');
                $uploadeditgambar = $editdatagambar;
            }else{
                $this->session->set_flashdata('error', $this->$edit_gambar->display_errors());
                redirect(site_url('galeri'));
            }
            
            $id_galeri = $this->input->post('id_galeri');
            $edit = $this->galeri->get_by_id($id_galeri);
            $basename = basename($edit->foto);
            if(file_exists('uploads/galeri/'.$basename) && $basename)
                unlink('uploads/galeri/'.$basename);
        }

        $data = array(
            'foto' => $uploadeditgambar,
        );
        $id_update = $this->input->post('id_galeri');

        $update = $this->galeri->update_galeri($id_update, $data);
        if ($update) {
            $response = [
                 'status' => 'success',
                 'message' => 'Berhasil Update Data Galeri'
            ];
            echo json_encode($response);
         }else{
             $response = [
                 'status'    => 'error',
                 'message'   => 'Gagal Update Data Galeri'
             ];
             echo json_encode($response);
         }
    }

    public function delete_galeri($id_galeri)
    {
        $app = $this->galeri->get_by_id($id_galeri);
        $basename = basename($app->foto);
        if (file_exists('uploads/galeri/'. $basename) && $basename)
            unlink('uploads/galeri/'. $basename);
        $this->galeri->delete($id_galeri);
        echo json_encode(array("status" => TRUE));
    }
}
