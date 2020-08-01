<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data = array (
        'tambah' => base_url('user/tambah_admin'),
        'data_admin' => $this->moduser->get_admin()
        );
    
        $this->template->back('back/data_admin', $data);
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $data = array(
            'data_menu' => $this->modmenu->data_menu($id),
            'back' => base_url('menu')
        );

        $this->template->back('back/edit_menu_mpasi', $data);
    }

    public function insert_admin()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->moduser->insert_admin($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Data Admin Berhasil Ditambah! </center></div>');
        redirect('user', 'refresh');
    }

    public function update_menu()
    {
        $id = $this->input->post('id_menu');

        $data = array(
            'id_menu' => $id,
            'judul_menu' => $this->input->post('judul_menu')
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