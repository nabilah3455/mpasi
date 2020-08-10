<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
    }
    public function index()
    {
        $data = array (
        'data_menu' => $this->moduser->get_menu(),
        'data_berita' => $this->moduser->get_berita()
        );
    
        $this->template->front('front/index', $data);
    }
    
    public function berita()
    {
        $this->load->database();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . '/user/berita';
        $jumlah_data = $this->modberita->jml_berita();
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);

        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item"><a href="#" class="page-link">';
        $config['num_tag_close'] = '</a></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
      
        $data = array (
        'data_berita' => $this->modberita->berita($config['per_page'], $from)
        );
    
        $this->template->front('front/berita', $data);
    }
}