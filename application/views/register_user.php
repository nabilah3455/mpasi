<html>

<head>
    <title>Register User</title>
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
        background: #00b09b;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #96c93d, #00b09b);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #96c93d, #00b09b);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }

    .register {
        width: 60%;
        margin: 0% auto;
        /* box-shadow: 0px 1px 1px 1px grey; */
        background-color: white;
        /* padding: 2rem 5rem; */
        border-radius: 5px;
        /* border: 1px solid grey; */
        box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.3);
    }

    .judul {
        text-align: center;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        padding: 1rem;
        /* background-color: #00587a; */
    }

    .row input {
        padding-bottom: 1rem;
    }

    .input-group {
        width: 40%;
    }

    .data {
        padding: 2rem 5rem;
    }

    table td {
        padding-top: 1rem;
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
</style>

<body class="">
    <div class="" style="padding-top: 3rem;">
        <div class="register">
            <div class="judul">
                <h2>Register</h2>
            </div>
            <div class="data">
                <form action="<?= base_url('user/register') ?>">
                    <table width="100%" style="background-color: white;">
                        <tr>
                            <th width="40%" valign="bottom">Nama Anak <label for="">*</label></th>
                            <td><input type="text" name="nama_anak" placeholder="Input Nama Anak" class="form-control"></td>
                        </tr>
                        <tr>
                            <th valign="bottom">Jenis Kelamin <label for="">*</label></th>
                            <td>
                                <select name="jk" id="" class="form-control">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th valign="bottom">Tanggal Kelahiran Anak <label for="">*</label></th>
                            <td><input type="date" name="tgl_lahir" placeholder="" class="form-control"></td>
                        </tr>
                        <tr>
                            <th valign="bottom">Berat Badan Kelahiran <label for="">*</label></th>
                            <td>
                                <div class="input-group">
                                    <input type="number" name="berat" placeholder="" class="form-control berat" autocomplete="off">
                                    <div class="input-group-addon">Kg</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th valign="bottom">Tinggi Badan Kelahiran <label for="">*</label></th>
                            <td>
                                <div class="input-group">
                                    <input type="number" name="tinggi" placeholder="" class="form-control berat" autocomplete="false">
                                    <div class="input-group-addon">Cm</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th valign="bottom">Username <label for="">*</label></th>
                            <td><input type="username" name="username" placeholder="Input Username" class="form-control"></td>
                        </tr>
                        <tr>
                            <th valign="bottom">Password <label for="">*</label></th>
                            <td><input type="password" name="password" placeholder="Input Password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <input type="submit" name="submit" value="Register" class="btn btn-success btn-rounded col-lg-12">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <a href="#" onclick="window.history.back();" class="btn btn-danger btn-rounded">Kembali</a>
                                <a href="" class="btn btn-primary btn-rounded">Login</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>