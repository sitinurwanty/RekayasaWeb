<?php
class Site extends CI_Controller{
    function home()
    {
        $data['judul'] = 'SIMATIK › Home';
        $data['main_content'] = 'main_content/home';
        $this->load->view('template', $data);
    }
}