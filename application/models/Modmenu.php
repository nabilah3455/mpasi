<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modmenu extends CI_Model
{
    function get_menu()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu ORDER BY id_menu");

        return $q->result_array();
    }
    
    function get_menu_6()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='6-7'");

        return $q->result_array();
    }
    
    function get_menu_8()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='8'");

        return $q->result_array();
    }
    
    function get_menu_9()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='9'");

        return $q->result_array();
    }
    
    function get_menu_10()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='10'");

        return $q->result_array();
    }

    function get_menu_11()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='11'");

        return $q->result_array();
    }

    function get_menu_12()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='12'");

        return $q->result_array();
    }

    function get_menu_13()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='13'");

        return $q->result_array();
    }

    function get_menu_14()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='14'");

        return $q->result_array();
    }

    function get_menu_15()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='15'");

        return $q->result_array();
    }

    function get_menu_16()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='16'");

        return $q->result_array();
    }

    function get_menu_17()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='17'");

        return $q->result_array();
    }

    function get_menu_18()
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE usia='18'");

        return $q->result_array();
    }

    function data_menu($id)
    {
        $q = $this->db->query("SELECT * FROM mpasi_menu WHERE id_menu='$id'");

        return $q->result_array();
    }

    function insert_menu($data)
    {
        if ($this->db->insert('mpasi_menu', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = FALSE;
        }
        return $e;
    }

    function update_menu($id, $data)
    {
        $this->db->where('id_menu', $id);
        $q = $this->db->update('mpasi_menu', $data);

        return $q;
    }

    function hapus_menu($id)
    {
        $q = $this->db->where('id_menu', $id)->delete('mpasi_menu');
        return $q;
    }
}
