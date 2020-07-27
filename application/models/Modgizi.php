<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modgizi extends CI_Model
{
    function get_gizi()
    {
        $q = $this->db->query("SELECT * FROM kalkulator_gizi ORDER BY id_hitung DESC");

        return $q->result_array();
    }

    function data_berita($id)
    {
        $q = $this->db->query("SELECT * FROM mpasi_news WHERE id_news='$id'");

        return $q->result_array();
    }

    function insert_berita($data)
    {
        if ($this->db->insert('mpasi_news', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_berita($id, $data)
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
