<?php
class User_model extends CI_Model
{
    function getAll()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id', 'ASC');

        return $this->db->get();
    }
    function getDataUser($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();

        // return $query->result();
        // $query = $this->db->get();
        return $query;
    }

    public function insertDataUser($data)
    {
        $this->db->insert('users', $data);
    }

    public function getDataUserDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function updateDataUser($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function deleteDataUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    public function login($email, $password)
    {
        // $sql = "SELECT * FROM USER WHERE username=? and password=MD5(?)";
        $sql = "SELECT * FROM users WHERE email=? and password=md5(?)";
        $query = $this->db->query($sql, [$email, $password]);
        $user = $query->row();
        $this->_update_last_login($user->id);
        // die(print_r($query->row()));
        return $query->row();
    }

    public function _update_last_login($id)
    {
        $data = [
            'last_login' => date("Y-m-d H:i:s"),
        ];

        return $this->db->update('users', $data, ['id' => $id]);
    }
}
