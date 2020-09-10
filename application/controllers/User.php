<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('url'));
    }
    
    public function index()
    {
        // $data = array (
        // 'data_menu' => $this->moduser->get_menu(),
        // 'data_berita' => $this->moduser->get_berita()
        // );
    
        $this->template->front('front/index');
        // $this->load->view('template/index_f');
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
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item active">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
      
        $data = array (
        'data_berita' => $this->modberita->berita($config['per_page'], $from)
        );
    
        $this->template->front('front/berita', $data);
    }
   
    public function menu()
    {
        $this->load->database();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . '/user/berita';
        // $jumlah_data = $this->modberita->jml_menu();
        // $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);

        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item active">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        $bulan = $this->input->get('bulan');
        
        if($bulan == '6'){
            $data_menu = $this->modmenu->get_menu_6($config['per_page'], $from);
        }elseif($bulan == '8'){
            $data_menu = $this->modmenu->get_menu_8($config['per_page'], $from);
        } elseif ($bulan == '9') {
            $data_menu = $this->modmenu->get_menu_9($config['per_page'], $from);
        } elseif ($bulan == '10') {
            $data_menu = $this->modmenu->get_menu_10($config['per_page'], $from);
        } elseif ($bulan == '11') {
            $data_menu = $this->modmenu->get_menu_11($config['per_page'], $from);
        } elseif ($bulan == '12') {
            $data_menu = $this->modmenu->get_menu_12($config['per_page'], $from);
        } elseif ($bulan == '13') {
            $data_menu = $this->modmenu->get_menu_13($config['per_page'], $from);
        } elseif ($bulan == '14') {
            $data_menu = $this->modmenu->get_menu_14($config['per_page'], $from);
        } elseif ($bulan == '15') {
            $data_menu = $this->modmenu->get_menu_15($config['per_page'], $from);
        } elseif ($bulan == '16') {
            $data_menu = $this->modmenu->get_menu_16($config['per_page'], $from);
        } elseif ($bulan == '17') {
            $data_menu = $this->modmenu->get_menu_17($config['per_page'], $from);
        } else {
            $data_menu = $this->modmenu->get_menu_18($config['per_page'], $from);
        }
        
        // $data = array (
        // 'data_menu' => $this->modberita->berita($config['per_page'], $from)
        // );
    
        $this->template->front('front/menu', $data_menu);
    }
}