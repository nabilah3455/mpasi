<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan extends CI_Controller
{
    public function index()
    {
        $data = array(
            'tambah' => base_url('bahan/tambah'),
            'data_bahan' => $this->modbahan->get_bahan()
        );
        $this->template->back('back/bahan_mpasi', $data);
    }

    public function tambah()
    {
        $data = array(
            'back' => base_url('bahan')
        );
        $this->template->back('back/tambah_bahan_mpasi', $data);
    }

    public function edit()
    {
        $id = $this->input->get('id');
        $data = array(
            'tambah' => base_url('bahan/tambah'),
            'data_bahan' => $this->modbahan->data_bahan($id),
            'back' => base_url('bahan')
        );

        $this->template->back('back/edit_bahan', $data);
    }

    public function insert_bahan()
    {
        $data = array(
            'id_news' => $this->input->post('id_bahan'),
            'judul_news' => $this->input->post('judul_bahan'),
            'isi_news' => $this->input->post('isi_bahan')
        );
        $this->modbahan->insert_bahan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>bahan Berhasil Ditambah! </center></div>');
        redirect('bahan', 'refresh');
    }

    public function update_bahan()
    {
        $id = $this->input->post('id_bahan');

        $data = array(
            'id_news' => $id,
            'judul_news' => $this->input->post('judul_bahan'),
            'isi_news' => $this->input->post('isi_bahan')
        );

        $this->modbahan->update_bahan($id, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>bahan Berhasil Diubah! </center></div>');
        redirect('bahan', 'refresh');
    }

    public function delete()
    {
        $id = $this->input->get('id');

        $this->modbahan->hapus_bahan($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><center>bahan Telah Dihapus! </center></div>');
        redirect('bahan', 'refresh');
    }
}
