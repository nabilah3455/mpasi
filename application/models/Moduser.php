<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Moduser extends CI_Model
{
    function get_admin()
    {
        $q = $this->db->query("SELECT * FROM admin");

        return $q->result_array();
    }

    function data_bahan($id)
    {
        $q = $this->db->query("SELECT * FROM bahan_mpasi WHERE id_bahan='$id'");

        return $q->result_array();
    }

    function insert_admin($data)
    {
        if ($this->db->insert('admin', $data)) {
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
