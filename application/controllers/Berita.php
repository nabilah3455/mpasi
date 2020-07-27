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
            'data_berita' => $this->modberita->get_berita(),
            'back' => base_url('berita')
        );
        $this->template->back('back/tambah_berita', $data);
    }
   
    public function edit()
    {
        $id = $this->input->get('id');
        $data = array(
            'tambah' => base_url('berita/tambah'),
            'data_berita' => $this->modberita->data_berita($id),
            'back' => base_url('berita')
        );

        $this->template->back('back/edit_berita', $data);
    }
    
    public function insert_berita()
    {
        $data = array(
            'id_news' => $this->input->post('id_berita'),
            'judul_news' => $this->input->post('judul_berita'),
            'isi_news' => $this->input->post('isi_berita')
        );
        $this->modberita->insert_berita($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Berita Berhasil Ditambah! </center></div>');
        redirect('berita', 'refresh');
    }
    
    public function update_berita()
    {
        $id=$this->input->post('id_berita');

        $data = array(
            'id_news' => $id,
            'judul_news' => $this->input->post('judul_berita'),
            'isi_news' => $this->input->post('isi_berita')
        );

        $this->modberita->update_berita($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Berita Berhasil Diubah! </center></div>');
        redirect('berita', 'refresh');
    }

    public function delete()
    {
        $id = $this->input->get('id');

        $this->modberita->hapus_berita($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>Berita Telah Dihapus! </center></div>');
        redirect('berita', 'refresh');
    }
}
