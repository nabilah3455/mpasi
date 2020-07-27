<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modbahan extends CI_Model
{
    function get_bahan()
    {
        $q = $this->db->query("SELECT * FROM mpasi ORDER BY id_menu DESC");

        return $q->result_array();
    }

    function data_bahan($id)
    {
        $q = $this->db->query("SELECT * FROM mpasi_news WHERE id_news='$id'");

        return $q->result_array();
    }

    function insert_bahan($data)
    {
        if ($this->db->insert('mpasi_news', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_bahan($id, $data)
    {
        $this->db->where('id_news', $id);
        $q = $this->db->update('mpasi_news', $data);

        return $q;
    }

    function hapus_berita($id)
    {
        $q = $this->db->where('id_news', $id)->delete('mpasi_news');
        return $q;
    }
}
