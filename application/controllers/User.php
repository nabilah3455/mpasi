<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login_user") {
            redirect(base_url("login_user"));
        }

        $this->load->helper(array('form', 'url'));
    }
    
    public function index()
    {
        $data = array (
            'title' => 'Home'
        );
    
        $this->template->front('front/index', $data);
        // $this->load->view('template/index_f');
    }
    
    public function berita()
    {
        $this->load->database();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . '/user/berita';
        $jumlah_data = $this->modberita->jml_berita();
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);

        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item active">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
      
        $data = array (
        'data_berita' => $this->modberita->berita($config['per_page'], $from)
        );
    
        $this->template->front('front/berita', $data);
    }
   
    public function menu()
    {
        $bulan = $this->input->get('bulan');

        $this->load->database();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'user/menu';
        $jumlah_data = $this->modmenu->jml_menu($bulan);
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 12;
        $from = $this->uri->segment(3);

        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['first_link'] = '<li class="page-link">First</li>';
        $config['last_link'] = '<li class="page-link">Last</li>';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item active">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        
        $data = array (
        'data_menu' => $this->modmenu->menu($config['per_page'], $from, $bulan)
        );

        // var_dump($jumlah_data);
        // die();
    
        $this->template->front('front/menu', $data);
    }

    public function detail_menu()
    {
        $id = $this->input->get('id');

        $data = array(
            'data_menu' => $this->modmenu->detail_menu($id)
        );

        $this->template->front('front/detail_menu', $data);
    }
    
    public function detail_berita()
    {
        $id = $this->input->get('id');

        $data = array(
            'data_berita' => $this->modberita->detail_berita($id)
        );

        $this->template->front('front/detail_berita', $data);
    }

    public function bahan()
    {
        $this->load->database();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'user/bahan';
        $jumlah_data = $this->modbahan->jml_bahan();
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 12;
        $from = $this->uri->segment(3);

        $config['next_link'] = '<i class="ti-angle-right"></i>';
        $config['prev_link'] = '<i class="ti-angle-left"></i>';
        $config['first_link'] = '<li class="page-link">First</li>';
        $config['last_link'] = '<li class="page-link">Last</li>';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item active">';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data = array(
            'data_bahan' => $this->modbahan->bahan($config['per_page'], $from)
        );

        // var_dump($jumlah_data);
        // die();

        $this->template->front('front/bahan', $data);
    }

    public function kalkulator()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'nama' => $data['user']['nama_user'],
            'id' => $data['user']['id_user'],
            'jk' => $data['user']['jenis_kelamin'],
            'tgl_lahir' => $data['user']['tgl_lahir'],
            'variabel' => $this->modgizi->get_variabel()
        );

        $this->template->front('front/kalkulator', $data);
    }

    public function input_hasil()
    {
        // include("koneksi_db.php");
        $id = $_POST['id'];
        $idvar=$_POST['idvar'];
        $q=count($idvar);
        $i=0;
        $t=0;
        while ($i<$q) 
        {
        $nilai=$_POST['nilai'];
        if(empty($nilai[$i])) { $t=1; }
        elseif(!is_numeric($nilai[$i])) { $t=1; } 
        else { $t==0; }
        $i++;
        }
            
            
        $idvar=$_POST['idvar'];
        $q=count($idvar);
        $i=0;
        $z=0;
        while ($i<$q) 
        {
        $idvar=$_POST['idvar'];
        $nilai=$_POST['nilai'];
            //   $yoyon=$this->db->query("select * from variabel where idvariabel='$idvar'");
            $yoyon = $this->modgizi->get_variabel2($idvar[$i]);

        foreach ($yoyon as $y){
        
        if($nilai[$i]>$y['nilai33'])
        {
        $z=$z+1;
        }
        else
        {
        $z=$z+0;
        }
        $i++;
        }
        }
        
        if($z>=1) 
        {
        echo"<center><font color=red size=5><strong><br /><br />Nilai Gejala Penyakit Belum Diisi Dengan Benar<br /><br />
            <input type=button  value=Kembali onclick='self.history.back()'/>";
        }
        else
        {
            // mysqli_query("insert into pasien values ('','$_POST[a]','$_POST[jk]','$_POST[b]','$_POST[c]')");
            // $user=$this->db->query("select * from pasien order by idpasien desc");
            $user = $this->modgizi->get_user();


        $idvar=$_POST['idvar'];
        $q=count($idvar);
        $i=0;
        while ($i<$q) 
        {
        $idvar=$_POST['idvar'];
        // $idvisitor=$_POST[idvisitor];
        $nilai=$_POST['nilai'];
        $tgl_sekarang = date('Y-m-d');
        $this->db->query("insert into kalkulator_gizi values('','$id','$idvar[$i]','$nilai[$i]','','','','','$tgl_sekarang')");

        $i++;
        }
        }
        //}
        redirect('user/simpan_nilai?id_user='.$id);
    }

    public function simpan_nilai()
    {
        $this->load->view('front/simpan_nilai');
    }

    public function nilai_gizi()
    {
        $id=$this->input->get('id_user');
        $variabel1 = $this->modgizi->get_variabel1();
        $tgl = date('Y-m');

        $data = array(
            'data_anak' => $this->modgizi->data_anak($id, $tgl),
            'variabel' => $this->modgizi->get_nilai_variabel(),
            'id' => $id,
            'tgl' => $tgl,
            'variabel1' => $variabel1,
            'rule' => $this->modgizi->get_rule()
            // 'nilai' => $this->modgizi->get_nilai($id, $variabel1, $tgl)
        );

        // var_dump($variabel1);
        // die();
        
        $this->template->front('front/hasil_gizi', $data);
    }
}