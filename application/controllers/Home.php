<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function _construct()
    {
        parent::_construct();

    }

    public function index()
    {
        $data['title'] = 'CodeIgniter | Home';
        $data['content'] = $this->load->view('blog/home', '', TRUE);
        $this->load->view('template/blog', $data, FALSE);
    }
}
?>  