<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Modgizi extends CI_Model
{
    function get_gizi()
    {
        $q = $this->db->query("SELECT * FROM kalkulator_gizi ORDER BY id_hitung DESC");

        return $q->result_array();
    }
    
    function insert_nilai($data)
    {
        if ($this->db->insert('kalkulator_gizi', $data)) {
            $e = "Data berhasil dimasukkan";
        } else {
            $e = 'belum masuk';
        }
        return $e;
    }

    function data_anak($id)
    {
        $q = $this->db->query("SELECT u.*, k.*, DATE_FORMAT (u.tgl_lahir, '%d %M %Y') as tgl_lahir FROM user u, kalkulator_gizi k WHERE u.id_user=k.id_user AND u.id_user='$id' LIMIT 1");

        return $q->result_array();
    }

    function get_variabel()
    {
        $q = $this->db->query("SELECT * FROM variabel ORDER BY idvariabel ASC");

        return $q->result_array();
    }
    
    function get_nilai_variabel()
    {
        $q = $this->db->query("SELECT * FROM variabel ORDER BY idvariabel ASC LIMIT 1");

        return $q->result_array();
    }
    
    function get_idvariabel()
    {
        $q = $this->db->query("SELECT idvariabel FROM variabel");

        return $q->result_array();
    }
    
    function get_variabel2($variabel)
    {
        $q = $this->db->query("SELECT * FROM variabel WHERE idvariabel='$variabel'");

        return $q->result_array();
    }
   
    function get_user()
    {
        $q = $this->db->query("SELECT * FROM user ORDER BY id_user ASC LIMIT 1");

        return $q->result_array();
    }
    
    function get_variabel1()
    {
        $q = $this->db->query("SELECT idvariabel FROM variabel ORDER BY idvariabel asc");

        return $q->result_array();
    }
    
    function get_nilai($id, $b)
    {
        $q = $this->db->query("SELECT k.*, v.variabel FROM kalkulator_gizi k, variabel v WHERE v.idvariabel = k.idvariabel AND k.id_user='$id' AND k.idvariabel='$b'");

        return $q->result_array();
    }
    
    function get_nilai2($id, $b, $tgl)
    {
        $q = $this->db->query("SELECT k.*, v.variabel FROM kalkulator_gizi k, variabel v WHERE v.idvariabel = k.idvariabel AND k.id_user='$id' AND k.idvariabel='$b' AND k.tgl_cek LIKE '$tgl%' LIMIT 1");

        return $q->result_array();
    }
   
    function get_nilai1($id, $b)
    {
        $q = $this->db->query("SELECT * FROM kalkulator_gizi WHERE id_user='$id'");

        return $q->result_array();
    }

    function get_rule()
    {
        $q = $this->db->query("SELECT * FROM rule");

        return $q->result_array();
    }
    
    function get_rule1($b)
    {
        $q = $this->db->query("SELECT * FROM rule1 WHERE idrule='$b'");

        return $q->num_rows();
    }
    
    function get_var_output()
    {
        $q = $this->db->query("SELECT * FROM var_output");

        return $q->result_array();
    }
    
    function get_rule2($b)
    {
        $q = $this->db->query("SELECT * FROM rule1 WHERE idrule='$b' ORDER BY idvariabel ASC");

        return $q->result_array();
    }
    
    function get_var_rule($d)
    {
        $q = $this->db->query("SELECT * from variabel where idvariabel='$d'");

        return $q->result_array();
    }
    
    function data_kalkulator($id,$d)
    {
        $q = $this->db->query("SELECT * from kalkulator_gizi where id_user='$id' and idvariabel='$d' ");

        return $q->result_array();
    }
    
    function get_min($id,$b)
    {
        $q = $this->db->query("SELECT * from min where id_user='$id' and idrule='$b' order by min asc LIMIT 1");

        return $q->result_array();
    }
    
    function get_tmin($id,$b)
    {
        $q = $this->db->query("SELECT * from min1 where id_user='$id' and idrule='$b' order by min asc LIMIT 1");

        return $q->num_rows();
    }
    
    function get_defuzzy($id)
    {
        $q = $this->db->query("SELECT * from defuzzy where id_user='$id'");

        return $q->num_rows();
    }
    
    function get_def1($id)
    {
        $q = $this->db->query("SELECT * from defuzzy where id_user='$id'");

        return $q->result_array();
    }
    
    function get_solusi()
    {
        $q = $this->db->query("SELECT * from var_output");

        return $q->result_array();
    }
}
