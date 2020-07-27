<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        // $data = array(
        // );
        $this->template->front('front/index');
        // $this->load->view('template/header_f');
        // $this->load->view('template/index_f');
        // $this->load->view('template/footer_f');
    }
}