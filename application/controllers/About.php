<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function _construct()
    {
        parent::_construct();
    }

    public function index()
    {
        $data['title'] = 'CodeIgniter | About';
        $data['content'] = $this->load->view('blog/about', '', TRUE);
        $this->load->view('template/blog', $data, FALSE);
    }

}
