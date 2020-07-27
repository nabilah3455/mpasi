<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {
        $data = array(
            'tambah' => base_url('berita/tambah'),
            'data_berita' => $this->modberita->get_berita()
        );
        $this->template->back('back/index', $data);
    }
   
    public function tambah()
    {
        $data = array(
            'tambah' => base_url('berita/tambah'),
            'data_berita' => $this->modberita->get_berita()
        );
        $this->template->back('back/tambah_berita', $data);
    }
}
