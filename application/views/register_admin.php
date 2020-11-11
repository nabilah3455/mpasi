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
    body {
        /* background-color: white; */
        padding: 0%;
        margin: auto;
        overflow-x: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #fafafa;
    }

    .login {
        /* border-style: dotted; */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-bottom: 1px;
        padding: 20px;
    }

    .banner {
        background-image: url('../assets/img/banner/hector-farahani-jvXX_1OK-ik-unsplash.jpg');
        background-size: cover;
        /* grid-column: 1/9;     */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    @media screen and (min-width: 450px) {
        .menu {
            width: 400px;
        }
    }

    /* .menu .regiter {
        padding-top: 6rem;
        text-align: center;
    } */

    .login-title {
        padding: 2rem 0;
    }

    h5 {
        text-align: center;
        padding-bottom: 1rem;
        /* font-weight: bold; */
    }

    label {
        color: red;
        font-size: 10px;
    }

    .menu {
        width: 90%;
        box-shadow: 2px 10px 20px rgba(0, 0, 0, .1);
        border-radius: 20px;
        overflow: hidden;
        background-color: white;
    }

    .button {
        text-align: center;
        padding-top: 1rem;
        padding-bottom: 3rem;
    }

    
</style>

<body>
    <!-- <div class="col-lg-12"> -->
    <div class="menu">
        <div class="row">
            <div class=" col-lg-5 login">
                <h2 class="login-title">
                    <b>Aplikasi Panduan Gizi Makanan Bayi</b></h2>
                <h5>Register Akun Admin</h5>
                <form action="<?= base_url('login/regiter') ?>" method="post" id="form-sample-1">
                    <table width="100%">
                        <tr>
                            <th width="40%">Username <label for=""><sup>*</sup></label></th>
                            <td width="1%" align="center">:</td>
                            <td>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Input Username" value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Password <label for=""><sup>*</sup></label></th>
                            <td width="5%" align="center">:</td>
                            <td>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Input Password" value="<?= set_value('username'); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>Ulangi Password <label for=""><sup>*</sup></label></th>
                            <td align="center">:</td>
                            <td>
                                <div class="pass">
                                    <input type="password" name="password_confirm" id="password_confirm" placeholder="Input Ulang Password" class="form-control input-sm pass">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3" class="button">
                                <input type="submit" name="submit" value="Buat Akun" class="btn btn-success btn-rounded">
                                <a href="#" onclick="window.history.back();" class="btn btn-danger btn-rounded">Kembali</a>
                            </th>
                        </tr>
                    </table>
                </form>
                <div class="register" style="text-align:center;">
                    <p>Sudah Mempunyai Akun? <br>
                        <a href="<?= base_url('login') ?>">Login</a></p>
                </div>
            </div>
            <div class="col-lg-7 banner">
                <!-- <img src="<?= base_url('assets/') ?>img/banner/hector-farahani-jvXX_1OK-ik-unsplash.jpg" alt=""> -->
            </div>
        </div>
        <!-- BEGIN PAGA BACKDROPS-->
        <div class="sidenav-backdrop backdrop"></div>
        <!-- <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div> -->
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
            $("#form-sample-1").validate({
                rules: {
                    username: {
                        required: !0
                    },
                    password: {
                        required: !0
                    },
                    password_confirm: {
                        required: !0,
                        equalTo: "#password"
                    }
                },
                errorClass: "help-block error",
                highlight: function(e) {
                    $(e).closest(".pass.input-group-add-on").addClass("error")
                },
                unhighlight: function(e) {
                    $(e).closest(".pass.input-group-add-on").removeClass("error")
                },
            });

            $(document).ready(function() {
                var app = {
                    check: function() {
                        var userVal = $("#username").val();
                        $.ajax({
                            url: "<?= base_url('login_user/username') ?>",
                            method: "POST",
                            data: {
                                userVal: userVal
                            },
                            success: function(response) {
                                $(".username").html(response).fadeIn("slow")

                            }
                        })
                    }
                }

                $("#username").keyup(app.check)
            })
        </script>
</body>

</html>