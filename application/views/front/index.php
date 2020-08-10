        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?= base_url('assets/front/') ?>img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Panduan Gizi<br>Makanan Bayi</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravi.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="<?= base_url('assets/front/') ?>img/hero/shiny-happy-people.png" alt="" width="500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?= base_url('assets/front/') ?>img/hero/h2_hero.png">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-7 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Menu MPASI<br></h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravi.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="industries.html" class="btn hero-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero__img d-none d-lg-block" data-animation="fadeInRight" data-delay="1s">
                                    <img src="<?= base_url('assets/front/') ?>img/hero/menu_mpasi.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End-->
        <hr width="95%" style="margin: 0 auto; color:pink;">
        <!-- What We do start-->
        <div class="what-we-do we-padding">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center">
                            <h2>Menu MPASI​</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($data_menu as $m) {
                        $m['bahan_menu'] = character_limiter($m['bahan_menu'], 35);
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-do text-center mb-30" style="box-shadow: 1px 1px 3px pink;">
                                <div class="do-icon">
                                    <span class="flaticon-fruit"></span>
                                </div>
                                <div class="do-caption">
                                    <h4><?= $m['judul_menu'] ?></h4><br>
                                    <p> <?= nl2br($m['bahan_menu']) ?></p>
                                </div>
                                <div class="do-btn">
                                    <a href="<?= base_url('user/menu') ?>?id=<?= $m['id_menu'] ?>"><i class="ti-arrow-right"></i> Lihat Menu</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- What We do End-->

        <!-- Generating Start -->
        <div class="generating-area ">
            <div class="container">
                <!-- Section-tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle text-center" style="padding-top: 5rem;">
                            <h2>Berita MPASI</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <?php foreach ($data_berita as $b) {
                            $b['isi_news'] = character_limiter($b['isi_news'], 200); ?>
                            <div class="col-lg-6 col-md-6">
                                <a href="<?= base_url('user/menu') ?>?id=<?= $b['id_news'] ?>"><i class="ti-arrow-right"></i>
                                    <div class="single-generating d-flex mb-30">
                                        <div class="generating-cap">
                                            <h4><?= $b['judul_news'] ?></h4>
                                            <p><?= $b['isi_news'] ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="text-center do-btn">
                    <h2><a href="<?= base_url('user/berita') ?>" class="btn btn-ans">Lihat Berita Lainnya <i class="ti-arrow-right"></i></a></h2>
                </div>
            </div>
        </div>

        <!-- Generating End -->
        <hr>
        </main>
        <footer>