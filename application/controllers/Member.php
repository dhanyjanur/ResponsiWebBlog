<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        //cek session setiap kali mengakses halaman member
        if (!$this->session->userdata('username')) {
            redirect('auth/login', 'refresh');
        }
    }


    public function index()
    {
        $data['title'] = 'Codeigniter | Dashboard';
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/dashboard', $data, FALSE);
    }
}

/* End of file Controllername.php */
