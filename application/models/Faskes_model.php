<?php
class Faskes_model extends CI_Model
{
    function getDataFaskes()
    {
        $query = $this->db->get('faskes');
        return $query->result();
    }

    public function get_count()
    {
        return $this->db->count_all_results('faskes');
    }


    function getAll()
    {
        $this->db->select('*');
        $this->db->from('faskes');
        $this->db->order_by('id', 'ASC');

        return $this->db->get();
    }

    public function join3table($limit, $offset)
    {
        // $this->db->select('*, nilai_rating.nama as nilai_rating, faskes.nama as faskes, faskes.id as faskes_id, users.id as users_id, komentar.id as komentar_id');
        $this->db->select('*, 
        faskes.id as faskes_id,
        faskes.nama as nama_faskes, 
        kecamatan.id as id_kecamatan, 
        jenis_faskes.id as jenis_faskes_id, 
        kecamatan.nama as nama_kecamatan, 
        jenis_faskes.nama as nama_jenis_faskes,
        
        ');
        $this->db->from('faskes');
        $this->db->join('jenis_faskes', 'faskes.jenis_id = jenis_faskes.id');
        $this->db->join('kecamatan', 'faskes.kecamatan_id = kecamatan.id');
        $this->db->limit($limit, $offset);

        $query = $this->db->get();
        return $query;
    }

    public function detailFaskes($id)
    {

        $this->db->select('*, 
        faskes.nama as nama_faskes, 
        kecamatan.id as id_kecamatan, 
        jenis_faskes.id as jenis_faskes_id, 
        kecamatan.nama as nama_kecamatan, 
        jenis_faskes.nama as nama_jenis_faskes,
        
        ');
        $this->db->from('faskes');
        $this->db->join('jenis_faskes', 'faskes.jenis_id = jenis_faskes.id');
        $this->db->join('kecamatan', 'faskes.kecamatan_id = kecamatan.id');
        $this->db->where('faskes.id', $id);

        $query = $this->db->get();
        return $query->row();
    }

    public function FaskesUser()
    {
        // $this->db->select('*, nilai_rating.nama as nilai_rating, faskes.nama as faskes, faskes.id as faskes_id, users.id as users_id, komentar.id as komentar_id');
        $this->db->select('*, 
        faskes.id as faskes_id,
        faskes.nama as nama_faskes, 
        kecamatan.id as id_kecamatan, 
        jenis_faskes.id as jenis_faskes_id, 
        kecamatan.nama as nama_kecamatan, 
        jenis_faskes.nama as nama_jenis_faskes,
        
        ');
        $this->db->from('faskes');
        $this->db->join('jenis_faskes', 'faskes.jenis_id = jenis_faskes.id');
        $this->db->join('kecamatan', 'faskes.kecamatan_id = kecamatan.id');

        $query = $this->db->get();
        return $query;
    }

    public function insertDataFaskes($data)
    {
        $this->db->insert('faskes', $data);
    }

    public function getDataFaskesDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('faskes');
        return $query->row();
    }

    public function getDataFaskesViewDetail($id)
    {
        // $this->db->select('*, nilai_rating.nama as nilai_rating, faskes.nama as faskes, faskes.id as faskes_id, users.id as users_id, komentar.id as komentar_id');
        $this->db->select('*, 
    faskes.id as faskes_id,
    faskes.nama as nama_faskes, 
    kecamatan.id as id_kecamatan, 
    jenis_faskes.id as jenis_faskes_id, 
    kecamatan.nama as nama_kecamatan, 
    jenis_faskes.nama as nama_jenis_faskes,
    
    ');
        $this->db->from('faskes');
        $this->db->join('jenis_faskes', 'faskes.jenis_id = jenis_faskes.id');
        $this->db->join('kecamatan', 'faskes.kecamatan_id = kecamatan.id');
        $this->db->where('faskes.id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function updateDataFaskes($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('faskes', $data);
    }

    public function deleteDataFaskes($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('faskes');
    }
}
