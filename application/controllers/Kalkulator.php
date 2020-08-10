<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalkulator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }


        $this->load->helper(array('form', 'url'));
    }
    
    public function index()
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'tambah' => base_url('kalkulator/tambah'),
            'data_gizi' => $this->modgizi->get_gizi()
        );
        $this->template->back('back/kalkulator_gizi', $data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'back' => base_url('kalkulator')
        );
        $this->template->back('back/tambah_kalkulator', $data);
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['username'],
            'data_menu' => $this->modmenu->data_menu($id),
            'back' => base_url('menu')
        );

        $this->template->back('back/edit_menu_mpasi', $data);
    }

    public function insert_menu()
    {
        $data = array(
            'id_menu' => $this->input->post('id_menu'),
            'judul_menu' => $this->input->post('judul_menu'),
            'bahan_menu' => $this->input->post('bahan'),
            'resep_menu' => $this->input->post('resep')
        );
        $this->modmenu->insert_menu($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Menu Berhasil Ditambah! </center></div>');
        redirect('menu', 'refresh');
    }

    public function update_menu()
    {
        $id = $this->input->post('id_menu');

        $data = array(
            'id_menu' => $id,
            'judul_menu' => $this->input->post('judul_menu'),
            'bahan_menu' => $this->input->post('bahan'),
            'resep_menu' => $this->input->post('resep')
        );

        $this->modmenu->update_menu($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Menu Berhasil Diubah! </center></div>');
        redirect('menu', 'refresh');
    }

    public function delete()
    {
        $id = $this->input->get('id');

        $this->modmenu->hapus_menu($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Menu Telah Dihapus! </center></div>');
        redirect('menu', 'refresh');
    }
}
