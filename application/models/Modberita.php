<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modberita extends CI_Model
{
    function get_berita()
    {
        $q = $this->db->query("SELECT * FROM mpasi_news ORDER BY id_news DESC");

        return $q->result_array();
    }
}