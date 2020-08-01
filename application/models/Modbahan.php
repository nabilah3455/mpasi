<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modbahan extends CI_Model
{
    function get_bahan()
    {
        $q = $this->db->query("SELECT * FROM bahan_mpasi ORDER BY id_bahan DESC");

        return $q->result_array();
    }

    function data_bahan($id)
    {
        $q = $this->db->query("SELECT * FROM bahan_mpasi WHERE id_bahan='$id'");

        return $q->result_array();
    }

    function insert_bahan($data)
    {
        if ($this->db->insert('bahan_mpasi', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_bahan($id, $data)
    {
        $this->db->where('id_bahan', $id);
        $q = $this->db->update('bahan_mpasi', $data);

        return $q;
    }

    function hapus_bahan($id)
    {
        $q = $this->db->where('id_bahan', $id)->delete('bahan_mpasi');
        return $q;
    }
}
