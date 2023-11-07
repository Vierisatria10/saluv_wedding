<?php
class DashboardModel extends CI_Model{

  public function get_mempelai()
  {
     return $this->db->get('tbl_mempelai')->num_rows();
  }

  public function get_jadwal()
  {
     return $this->db->get('tbl_jadwal')->num_rows();
  }

  public function get_galeri()
  {
     return $this->db->get('tbl_galeri')->num_rows();
  }
  
  public function get_hadir()
  {
      $this->db->select('*');
      $this->db->from('tbl_ucapan');
      $this->db->where('status', 'Hadir');
      return $this->db->get()->num_rows();
  }
}