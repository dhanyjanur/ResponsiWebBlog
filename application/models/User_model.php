<?php

class User_model extends CI_Model
{
    //tampil data
    public function getAllUser()
    {
        //users = nama tabel
        return $this->db->get('users')->result_array();
    }

    //hapus data
    public function hapusData($id)
    {
        $this->db->delete('users', ['id' => $id]);
    }

    //ubah data
    public function getUserById($id)
    {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }
    public function updateData()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('users', $data);
    }
}
