<style>
    .read-more {
        float: right;
        font-weight: 80px;
        text-decoration: underline;
    }

    .banner {
        background-image: url('../assets/front/img/banner/banner_1.jpg');
        background-size: cover;
    }

    .pagiantion a:link{
        background-color: aqua;
    }
</style>

<!-- Slider Area Start-->
<div class="services-area banner">
    <div class="container">

        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <span style="text-shadow:1px 1px 1px white;">Panduan Gizi Makanan Bayi</span>
                    <h2 style="text-shadow:1px 3px 1px white;">Berita MPASI</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!--================Blog Area =================-->
<section class="blog_area section-paddingr">
    <div class="container">
        <div class="row">
            <?php foreach ($data_berita as $b) {
                $b->isi_news = character_limiter($b->isi_news, 250); ?>
                <div class="col-lg-12 mb-5 mb-lg-0" data-background="<?= base_url('assets/front/') ?>img/hero/about-sharpe2.png">
                    <div class=" blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2><?= $b->judul_news ?></h2>
                                </a>
                                <p><?= $b->isi_news ?></p>
                                <div class="read-more">
                                    <a href="<?= base_url('user/isi_berita') ?>?id=<?= $b->id_news ?>"> Baca Selengkapnya <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="blog-pagination justify-content-center d-flex">
            <?php echo $this->pagination->create_links(); ?>
        </div>
</section>