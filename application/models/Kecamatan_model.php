<?php
class Kecamatan_model extends CI_Model
{

    function getDataKecamatan()
    {
        $query = $this->db->get('kecamatan');
        return $query->result();
    }

    public function insertDataKecamatan($data)
    {
        $this->db->insert('kecamatan', $data);
    }

    public function getDataKecamatanDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kecamatan');
        return $query->row();
    }

    public function updateDataKecamatan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('kecamatan', $data);
    }

    public function deleteDataKecamatan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kecamatan');
    }
}
