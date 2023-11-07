<?php
class CeritaModel extends CI_Model{
 
  var $table = 'tbl_cerita';
  var $column_order = array(null, 'id_cerita', 'judul', 'tanggal', 'keterangan', 'foto');
  var $column_search = array('judul', 'foto');
  var $order = array('judul' => 'asc');

  public function _get_datatables_query()
  {
      $this->db->from($this->table);
      $i = 0;

      foreach ($this->column_search as $item)
      {
          if ($_POST['search']['value']) 
          {

              if ($i === 0)
              {
                  $this->db->group_start();
                  $this->db->like($item, $_POST['search']['value']);
              } else {
                  $this->db->or_like($item, $_POST['search']['value']);
              }

              if (count($this->column_search) - 1 == $i)
                  $this->db->group_end();
          }
          $i++;
      }

      if (isset($_POST['order'])) {
          $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      } else if (isset($this->order)) {
          $order = $this->order;
          $this->db->order_by(key($order), $order[key($order)]);
      }
  }

  public function get_datatables()
  {
      $this->_get_datatables_query();
      if ($_POST['length'] != -1)
          $this->db->limit($_POST['length'], $_POST['start']);
      $query = $this->db->get();
      return $query->result();
  }

  function count_filtered()
  {
      $this->_get_datatables_query();
      $query = $this->db->get();
      return $query->num_rows();
  }

  public function count_all()
  {
      $this->db->from($this->table);
      return $this->db->count_all_results();
  }

  public function get_cerita()
  {
    return $this->db->get('tbl_cerita');
  }

  public function get_by_id($id_cerita)
  {
    $this->db->select('*');
    $this->db->from('tbl_cerita');
    $this->db->where('id_cerita', $id_cerita);
    $query = $this->db->get();
    return $query->row();
  }

  public function delete($id_cerita)
  {
      $this->db->where('id_cerita', $id_cerita);
      return $this->db->delete($this->table);
  }

  public function insert_cerita($data)
  {
    return $this->db->insert($this->table, $data);
  }
}