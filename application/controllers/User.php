<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data = array (
        'tambah' => base_url('user/tambah_admin'),
        'data_admin' => $this->moduser->get_admin()
        );
    
        $this->template->front('front/index', $data);
    }
}