<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
        $this->load->library('session');
    }

    public function register()
    {
        //aturan validasi setiap input
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password1]');

        //set eror code
        $this->form_validation->set_error_delimiters('<small id="emailHelp" class="form-text text-danger">', '</small>');

        //menjalankan validasi form
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'CodeIgniter | Register';
            $data['content'] = $this->load->view('blog/register', '', TRUE);
            $this->load->view('template/blog', $data, FALSE);
        } else {
            //ketika berhasil panggil function register_user di Auth_model.php 
            if ($this->Auth_model->register_user()) {
                //beri notifikasi sukses
                $this->session->set_flashdata('notifikasi', 'Registrasi berhasil!');
                //arahkan ke form register
                redirect('auth/register', 'refresh');
            }
        }
    }
    public function login()
    {
        //aturan validasi setiap input
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        //set eror code
        $this->form_validation->set_error_delimiters('<small id="username" class="form-text text-danger">', '</small>');
        //menjalankan validasi form
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'CodeIgniter | Login';
            $data['content'] = $this->load->view('blog/login', '', TRUE);
            $this->load->view('template/blog', $data, FALSE);
        } else {
            //ketika validasi input OK
            //Ketika berhasil panggil function login_user() di Auth_model.php
            if ($this->Auth_model->login_user() == 1) {
                //ketika user valid 
                //set session di model
                redirect('member', 'refresh');
            } elseif ($this->Auth_model->login_user() == 2) {
                //ketika password salah
                $this->session->set_flashdata('notifikasi', 'Password Salah!!!');
                //arahkan ke form login lagi 
                redirect('auth/login', 'refresh');
            } else {
                //ketika email tidak terdaftar 
                $this->session->set_flashdata('notifikasi', 'username Tidak Terdaftar!!');
                //arahkan kembali ke form login 
                redirect('auth/login', 'refresh');
            }
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        redirect('auth/login', 'refresh');
    }
}
