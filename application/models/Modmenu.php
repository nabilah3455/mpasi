<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modmenu extends CI_Model
{
    function get_menu()
    {
        $q = $this->db->query("SELECT * FROM mpasi ORDER BY id_menu DESC");

        return $q->result_array();
    }

    function data_menu($id)
    {
        $q = $this->db->query("SELECT * FROM mpasi WHERE id_menu='$id'");

        return $q->result_array();
    }

    function insert_menu($data)
    {
        if ($this->db->insert('mpasi', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_menu($id, $data)
    {
        $this->db->where('id_menu', $id);
        $q = $this->db->update('mpasi', $data);

        return $q;
    }

    function hapus_menu($id)
    {
        $q = $this->db->where('id_menu', $id)->delete('mpasi');
        return $q;
    }
}
