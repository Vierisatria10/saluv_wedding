<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		  redirect('login');
		}
		$this->load->model('UserModel', 'user');
        // $this->load->model('UcapanModel', 'ucapan');
	}

	public function backup_db()
	{
        // load database utility ci3
        $this->load->dbutil();
    
        // siapkan nama file
        $db_name = $this->db->database . '_' . date("Y-m-d") . '.sql';
    
        $config = array(
        'format'            => 'txt', // txt, zip, gzip
        'filename'          => $db_name,
        'add_drop'          => TRUE,
        'add_insert'        => TRUE,
        'newline'           => "\n",
        'foreign_key_checks' => FALSE,
        );
    
        // siapkan variabel $backup tuk proses buat dan download file
        $backup = $this->dbutil->backup($config);
    
        // set lokasi buat dan download file
        $save = FCPATH . 'backup/' . $db_name;
    
        // buat file
        $this->load->helper('file');
        write_file($save, $backup);
    
        // download file
        $this->load->helper('download');
        force_download($db_name, $backup);
        // $data['title'] = 'The Wedding of Vieri & Rere';
		// $data['get_ucapan']	= $this->home->get_ucapan()->result();
        // $this->template->load('layouts/main', 'admin/pengaturan/v_backup', $data);
	}

    public function user()
    {
        $data['title'] = 'Data Pengguna - SaluvWedding';
		// $data['get_ucapan']	= $this->home->get_ucapan()->result();
        $this->template->load('layouts/main', 'admin/pengaturan/v_user', $data);
    }

    public function get_data_user()
    {
        $list = $this->user->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama;
            $row[] = $field->email;
            $row[] = $field->username;
            if($field->level == '1') 
                $row[] = '<div class="badge bg-success">Admin</div>';
            else
                $row[] = '<div class="badge bg-info">User</div>';
           
            $aksi = '
            <div class="dropdown d-flex justify-content-center">
                <button class="btn btn-primary btn-block btn-sm dropdown-toggle" type="button" id="Menuid" data-bs-toggle="dropdown" aria-expanded="false"
                    <i class="fa fa-cog mr-1">Pilih Aksi</i>
                </button>
                <div class="dropdown-menu"> 
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item mx-2 btn_form_edit" href="javascript:void()" title="Edit" onclick="edit_user('."'".$field->id."'".')"><i class="fa fa-edit fa-lg mx-1"></i> Edit User</a>
                            <a class="dropdown-item mx-2" href="javascript:void(0)" title="Hapus" onclick="delete_user('."'".$field->id."'".')"><i class="fa fa-trash fa-lg mx-1"></i> Hapus User</a>
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
            "recordsTotal" => $this->user->count_all(),
            "recordsFiltered" => $this->user->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function simpan_user()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $username = $this->input->post('username');
        $level = $this->input->post('level');

        if (!empty($_FILES['foto_user']['name'])) {
            $upload = $this->_do_upload();
            $data['foto'] = $upload;
        }

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'username' => $username,
            'level' => $level 
        );

        $insert = $this->user->insert_user($data);
		if ($insert) {
			$response = [
				'status' => 'success',
				'message' => 'Data User Berhasil DiSimpan'
			];
			echo json_encode($response);
		}else{
			$response = [
				'status' => 'error',
				'message' => 'Data User Gagal DiSimpan'
			];
			echo json_encode($response);
		}
    }

    private function _do_upload()
    {
        $config['upload_path']          = 'uploads/user/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
     
        $this->load->library('upload', $config);
     
        if(!$this->upload->do_upload('foto_user')) //upload and validate
        {
            $data['inputerror'][] = 'foto_user';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
}