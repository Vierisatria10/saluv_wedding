<?php
class MempelaiModel extends CI_Model
{
    public function get_mempelai()
    {
        return $this->db->get('tbl_mempelai');
    }

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_by_id($id_mempelai)
    {
        $this->db->select('*');
        $this->db->from('tbl_mempelai');
        $this->db->where('id_mempelai',$id_mempelai);
        $query = $this->db->get();
 
        return $query->row();
    }

    public function update($id_mempelai, $data)
    {
        $this->db->where('id_mempelai', $id_mempelai);
        return $this->db->update('tbl_mempelai', $data);
    }
}