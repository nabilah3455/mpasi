<html>

<head>
    <title>Register User</title>
    <link rel="icon" href="<?= base_url('assets/front/') ?>img/android-chrome-192x192.png">
    <link href="<?= base_url('assets/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?= base_url('assets/') ?>css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="<?= base_url('assets/') ?>css/pages/auth-light.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<style>
    body {
        background: #ccf6c8;
    }

    .judul {
        text-align: center;
        font-weight: bold;
        padding: 2rem;
    }

    .input-group {
        width: 100%;
    }

    .data {
        padding: 0 2rem 2rem 0;
    }

    table td {
        padding: 9px;
    }

    table th {
        font-size: 14px;
        text-align: right;
        padding-right: 1rem;
    }

    .button {
        text-align: center;
        padding-top: 2rem;
    }

    label {
        color: red;
    }

    .box {
        width: 90%;
        margin: 2% auto;
        background-color: white;
        /* background: grey; */
        box-shadow: 1px 1px 5px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="box">
        <div class="row">
            <div class="col-lg-5">
                <img src="<?= base_url('assets/img/banner/diana-oborska-eS07Cany2g4-unsplash.jpg') ?>" alt="" width="100%" height="100%">
            </div>
            <div class="col-lg-7">
                <div class="judul">
                    <h2>Register</h2>
                </div>
                <div class="data">
                    <form action="<?= base_url('login_user/register') ?>" method="POST" id="form-sample-1" novalidate="novalidate">
                        <table width="100%">
                            <tr>
                                <th width="30%" valign="center">Nama Anak <label for="">*</label></th>
                                <td><input type="text" name="nama_anak" placeholder="Input Nama Anak" value="<?= set_value('nama_anak'); ?>" class="form-control input-sm pass" autocomplete="false"></td>
                            </tr>
                            <tr>
                                <th valign="center">Jenis Kelamin <label for="">*</label></th>
                                <td>
                                    <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin">Perempuan &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin">Laki-Laki
                                </td>
                            </tr>
                            <tr>
                                <th valign="center">Tanggal Kelahiran Anak <label for="">*</label></th>
                                <td><input type="date" name="tgl_lahir" value="<?= set_value('tgl_lahir'); ?>" placeholder="" class="form-control input-sm"></td>
                            </tr>
                            <tr>
                                <th valign="center">Berat Badan Kelahiran <label for="">*</label></th>
                                <td>
                                    <div class="input-group">
                                        <input type="number" name="berat_badan_kelahiran" placeholder="" value="<?= set_value('berat_badan_kelahiran'); ?>" class="form-control input-sm berat" autocomplete="off" required />
                                        <div class="input-group-addon">Kg</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th valign="center">Tinggi Badan Kelahiran <label for="">*</label></th>
                                <td>
                                    <div class="input-group">
                                        <input type="number" name="tinggi_badan_kelahiran" placeholder="" value="<?= set_value('berat_badan_kelahiran'); ?>" class="form-control input-sm berat" autocomplete="false" required />
                                        <div class="input-group-addon">Cm</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th valign="center">Username <label for="">*</label></th>
                                <td>
                                    <input type="username" name="username" id="username" placeholder="Input Username" value="<?= set_value('username'); ?>" class="form-control input-sm pass username">
                                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th valign="center">Password <label for="">*</label></th>
                                <td>
                                    <div class="pass">
                                        <input type="password" id="password" name="password" placeholder="Input Password" value="<?= set_value('password'); ?>" class="form-control input-sm pass">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Ulangi Password <label for="">*</label></th>
                                <td>
                                    <div class="pass">
                                        <input type="password" name="password_confirm" placeholder="Input Ulang Password" class="form-control input-sm pass">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="button">
                                        <input type="submit" name="submit" value="Buat Akun" class="btn btn-success btn-rounded">
                                        <a href="#" onclick="window.history.back();" class="btn btn-danger btn-rounded">Kembali</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                </td>
                            </tr>
                        </table>
                        <div class="text-center">
                            Sudah Mempunyai Akun? <br> <a href="<?= base_url('login_user') ?>">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?= base_url('assets/') ?>vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?= base_url('assets/') ?>js/app.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    // #form-sample-1 di dapet dari tag form id=form-sampe-1
        $("#form-sample-1").validate({
            rules: {
                nama_anak: {
                    required: !0
                },
                jk: {
                    required: !0
                },
                tgl_lahir: {
                    required: !0
                },
                tinggi: {
                    required: !0
                },
                berat: {
                    required: !0
                },
                password: {
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