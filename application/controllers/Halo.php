<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Halo extends CI_Controller {

    function _construct()
    {
        parent::_construct();
    }

    public function index()
    {
        $data['title']= 'judul tab app';
        $data['username']= 'ini budi';

        $this->load->view('view_halo', $data, FALSE);
    }

    public function beranda()
    {
        echo "ini adalah di halo";
    }

}

?>