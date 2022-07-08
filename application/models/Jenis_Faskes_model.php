<?php
class Jenis_Faskes_model extends CI_Model
{
    function getDataJenis_Faskes()
    {
        $query = $this->db->get('jenis_faskes');
        return $query->result();
    }

    public function insertDataJenis_Faskes($data)
    {
        $this->db->insert('jenis_faskes', $data);
    }

    public function getDataJenis_FaskesDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('jenis_faskes');
        return $query->row();
    }

    public function updateDataJenis_Faskes($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('jenis_faskes', $data);
    }

    public function deleteDataJenis_Faskes($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis_faskes');
    }
}
