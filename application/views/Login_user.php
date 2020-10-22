<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Panduan Gizi Makanan Bayi</title>
    <link rel="icon" href="<?= base_url('assets/front/') ?>img/android-chrome-192x192.png">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?= base_url('assets/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?= base_url('assets/') ?>css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="<?= base_url('assets/') ?>css/pages/auth-light.css" rel="stylesheet" />
</head>

<style>
    .login {
        background-color: white;
        padding: 8.6rem 5rem;
    }

    .banner {
        background-image: url('assets/img/banner/hector-farahani-jvXX_1OK-ik-unsplash.jpg');
        background-size: cover;
    }

    .register {
        padding-top: 3rem;
        text-align: center;
    }

    .login-title {
        padding-bottom: 2rem;
    }

    h5 {
        text-align: center;
        padding-bottom: 1rem;
        font-weight: bold;
    }

    label {
        color: red;
        font-size: 13px;
        font-style: italic;
    }
</style>

<body>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4 login">
                <form action="<?= base_url('login_user') ?>" method="post">

                    <h2 class="login-title">
                        <b>Aplikasi Panduan Gizi Makanan Bayi</b></h2>
                    <h5>Login</h5>
                    <div class="col-lg-12">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="form-group">
                        <div class="input-group-icon left">
                            <div class="input-icon"><i class="fa fa-user"></i></div>
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-icon left">
                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-block" type="submit">Login</button>
                    </div>
                    <!-- <div class="text-center">Not a member?
                <a class="color-blue" href="register.html">Create accaunt</a>
            </div> -->
                </form>
                <div class="register">
                    <p>Belum Mempunyai Akun? <br>
                        <a href="<?= base_url('login_user/register') ?>">Buat Akun</a></p>
                </div>
            </div>
            <div class="col-lg-8 banner">
                <!-- <img src="<?= base_url('assets/') ?>img/banner/hector-farahani-jvXX_1OK-ik-unsplash.jpg" alt="" style="float: right;"> -->
            </div>
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="<?= base_url('assets/') ?>vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/') ?>vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/') ?>vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="<?= base_url('assets/') ?>vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>