<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = array (
            'self' => base_url('dashboard')
        );
        $this->template->back('back/dashboard', $data);
    }
}
