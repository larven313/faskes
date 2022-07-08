<?php
class Komentar_model extends CI_Model
{
    function getDataKomentar()
    {
        $query = $this->db->get('komentar');
        return $query->result();
    }

    function getDataFaskes()
    {
        $query = $this->db->get('faskes');
        return $query->result();
    }

    public function join4table()
    {
        $this->db->select('*, nilai_rating.nama as nilai_rating, faskes.nama as faskes, faskes.id as faskes_id, users.id as users_id, komentar.id as komentar_id');
        $this->db->from('komentar');
        $this->db->join('users', 'komentar.users_id = users.id');
        $this->db->join('faskes', 'komentar.faskes_id = faskes.id');
        $this->db->join('nilai_rating', 'komentar.nilai_rating_id = nilai_rating.id');
        $query = $this->db->get();
        return $query;
    }

    public function allKomentar($id)
    {
        $this->db->select('*, nilai_rating.nama as nilai_rating, faskes.nama as faskes, faskes.id as faskes_id, users.id as users_id, komentar.id as komentar_id');
        $this->db->from('komentar');
        $this->db->join('users', 'komentar.users_id = users.id');
        $this->db->join('faskes', 'komentar.faskes_id = faskes.id');
        $this->db->join('nilai_rating', 'komentar.nilai_rating_id = nilai_rating.id');
        $this->db->where('faskes_id', $id);

        $query = $this->db->get();
        return $query;
    }

    public function myKomentar($id)
    {
        $this->db->select('*, nilai_rating.nama as nilai_rating, faskes.nama as faskes, faskes.id as faskes_id, users.id as users_id, komentar.id as komentar_id');
        $this->db->from('komentar');
        $this->db->join('users', 'komentar.users_id = users.id');
        $this->db->join('faskes', 'komentar.faskes_id = faskes.id');
        $this->db->join('nilai_rating', 'komentar.nilai_rating_id = nilai_rating.id');
        $this->db->where('users_id', $id);

        $query = $this->db->get();
        return $query;
    }

    public function allUser($id)
    {
        $this->db->select('*, nilai_rating.nama as nilai_rating, faskes.nama as faskes, faskes.id as faskes_id, users.id as users_id, komentar.id as komentar_id');
        $this->db->from('komentar');
        $this->db->join('users', 'komentar.users_id = users.id');
        $this->db->join('faskes', 'komentar.faskes_id = faskes.id');
        $this->db->join('nilai_rating', 'komentar.nilai_rating_id = nilai_rating.id');
        $this->db->where('users_id', $id);

        $query = $this->db->get();
        return $query;
    }

    public function insertDataKomentar($data)
    {
        $this->db->insert('komentar', $data);
    }

    public function getDataKomentarDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('komentar');
        return $query->row();
    }

    public function updateDataKomentar($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('komentar', $data);
    }

    public function deleteDataKomentar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('komentar');
    }
}
