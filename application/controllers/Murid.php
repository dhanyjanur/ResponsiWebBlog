<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Murid extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $data['title'] = 'Codeigniter | Daftar Murid Baru';
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/daftar_murid', $data, FALSE);
    }
}
