<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register_user()
    {
        //fucntion ini akan menginsertkan data user ke DB
        //siapkan data yang akan di masukan ke db
        $data = array(
            'username'     => $this->input->post('username', TRUE),
            'password'  => password_hash($this->input->post('password1', TRUE), PASSWORD_DEFAULT),

        );

        if ($this->db->insert('users', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function login_user()
    {
        // mengambil data dari form login
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        // melakukan pencarian terhadap email di DB
        $result = $this->db->get_where('users', array('username' => $username))->row_array();
        //  die(print_r($result));
        // kalau ada cek passwordnya
        if ($result) {
            //ketika ada data, cek password
            if (password_verify($password, $result['password'])) {
                //set session untuk user yang sudah login
                $this->session->set_userdata('uid', $result['id']);
                $this->session->set_userdata('username', $result['username']);
                //jika password benar
                return 1;
            } else {
                //Jika password salah
                return 2;
            }
        } else {
            //jika email tidak ada
            return 3;
        }
    }
}
