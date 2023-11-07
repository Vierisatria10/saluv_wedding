<?php
class UcapanModel extends CI_Model{

public function delete($where, $table)
  {
      $this->db->where($where);
      $this->db->delete($table);
  }

  public function read_excel()
  {
    $this->db->select('*');
    $this->db->from('tbl_ucapan');
    return $this->db->get();
  }
}


