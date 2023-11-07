<?php
class HomeModel extends CI_Model{

  public function insert_data($data)
  {
     return $this->db->insert('tbl_ucapan', $data);
  }

  public function get_ucapan()
  {
    return $this->db->get('tbl_ucapan');
  }

}