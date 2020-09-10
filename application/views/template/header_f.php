 <style>
     #logo {
         text-align: center;
         font-size: 30px;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     }
 </style>

 <!--::header part start::-->
 <header class="header_area">
     <div class="sub_header">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-11">
                     <div id="logo">
                         Aplikasi Panduan Makanan Gizi Bayi
                     </div>
                 </div>
                 <div class="col-lg-1">
                     <div class="sub_header_social_icon float-right">
                         <a href="#" class="btn_1 d-none d-md-inline-block">Logout</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="main_menu">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <nav class="navbar navbar-expand-lg navbar-light">
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                             <i class="ti-menu"></i>
                         </button>

                         <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                             <ul class="navbar-nav">
                                 <li class="nav-item active">
                                     <a class="nav-link active" href="<?= base_url('user') ?>">Home</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('user/berita') ?>" class="nav-link">Berita MPASI</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('user/bahan') ?>" class="nav-link">Bahan MPASI</a>
                                 </li>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Menu MPASI
                                     </a>
                                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>">Semua Menu</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=6">6-7 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=8">8 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=9">9 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=10">10 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=11">11 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=12">12 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=13">13 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=14">14 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=15">15 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=16">16 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=17">17 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=18">18 Bulan</a>
                                     </div>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('user/kalkulator') ?>" class=" nav-link">Kalkulator Gizi</a>
                                 </li>
                             </ul>
                         </div>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- Header part end-->