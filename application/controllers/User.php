<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    //tampil data
    public function index()
    {
        $data['user'] = $this->User_model->getAllUser();
        $data['title'] = 'Codeigniter | User';
        $data['content'] = $this->load->view('blog/user', $data, TRUE); 
        $this->load->view('template/blog', $data, FALSE); 
    }

    //hapus data
    public function hapus($id)
    {
        $this->User_model->hapusData($id);
        redirect('user');
    }

    //tampil data ke form
    public function formEdit($id)
    {
        $data['user'] = $this->User_model->getUserById($id);
        // $this->load->view('blog/form_edit', $data);

        $data['title'] = 'Codeigniter | User';
        $data['content'] = $this->load->view('blog/form_edit', $data, TRUE); 
        $this->load->view('template/blog', $data, FALSE);


    }

    //ubah data
    public function ubahData()
    {
        $this->User_model->updateData();
        redirect('user');
    }

}