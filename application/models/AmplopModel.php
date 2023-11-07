<?php
class AmplopModel extends CI_Model
{
    public function get_amplop()
    {
        $this->db->select('*');
        $this->db->from('tbl_amplop');
        return $this->db->get()->result();
    }

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_by_id($id_amplop)
    {
        $this->db->select('*');
        $this->db->from('tbl_amplop');
        $this->db->where('id_amplop', $id_amplop);
        $query = $this->db->get();
        return $query->row();
    }

    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function delete($id_amplop)
    {
        $this->db->where('id_amplop', $id_amplop);
        return $this->db->delete('tbl_amplop');
    }
}