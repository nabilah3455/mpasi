<style>
    .breadcrumb {
        background-image: url('../assets/img/banner/food.jpg')
    }

    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        font-size: 59px;
        /* text-decoration: underline; */
        font-weight: bold;
    }

    .blog_details .button-group-area{
        margin: 0 auto;
    }
</style>

<!--::breadcrumb part start::-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <!-- <div class="breadcrumb_iner_item">
                        <h1>Menu MPASI</h1>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--::breadcrumb part start::-->

<!--================Blog Area =================-->
<div class="judul">
    <h1>Menu MPASI</h1>
</div>
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <?php foreach($data_menu as $d) { ?>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <?php if($d['foto'] != null) { ?>
                                    <img class="card-img rounded-0" src="<?= base_url('assets/') ?>img/menu/<?= $d['foto'] ?>" alt="" width="50px" height="250px">
                                <?php } else { ?>
                                    <img class="card-img rounded-0" src="<?= base_url('assets/') ?>img/image.png" alt="" width="50px" height="250px">
                                <?php } ?>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2><b><?= $d['judul_menu']; ?></b></h2>
                                </a>
                                <p><?= nl2br($d['bahan_menu']) ?></p>
                                <div class="button-group-area mt-10">
                                    <a href="<?= base_url('user/detail_menu') ?>?id=<?= $d['id_menu']; ?>" class="genric-btn primary circle arrow">Cara Membuat</a>
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
    </div>
</section>
<!--================Blog Area =================-->