<style>
    .breadcrumb {
        background-image: url('../assets/img/banner/maria-ionova-SMKun_4YtJw-unsplash.jpg')
    }

    .judul h1 {
        text-align: center;
        padding-top: 2rem;
        font-size: 59px;
        font-weight: bold;
    }

    .input_anak td {
        padding-top: 1rem;
        font-size: 16px;
        font-weight: bold;
        /* width: 5%; */
        /* padding-right: 1rem; */
    }

    label {
        color: red;
    }

    .data_anak {
        width: 150px;
    }

    .data {
        width: 500px;
    }

    .hasil td {
        font-size: 15px;
    }

    .umur {
        background-color: aqua;
    }

    .total {
        text-align: center;
        padding-top: 2rem;
        font-size: 15px;
    }

    .total b {
        color: black;
    }

    .cetak {
        padding-top: 4rem;
        text-align: center;
    }

    h4 {
        font-weight: bold;
        text-align: center;
        padding-top: 1rem;
    }

    .btn {
        float: center;
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
<div class="judul">
    <h1>Kalkulator Gizi</h1>
</div>
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <h3>Input Data Anak</h3>
                <form action="<?= base_url('user/input_hasil'); ?>" method="POST">
                    <table width="100%" class="input_anak">
                        <tbody>
                            <tr>
                                <td width="20%">Nama Anak
                                    <label>*</label>
                                </td>
                                <td width="1%">:</td>
                                <td>
                                    <input type="hidden" name="id" value="<?= $id ?>" class="form-control data" readonly>
                                    <input type="name" name="nama_anak" value="<?= $nama ?>" class="form-control data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin <label>*</label></td>
                                <td>:</td>
                                <td>
                                    <?php if ($jk == 'P') { ?>
                                        <input type="name" name="jk" value="Perempuan" class="form-control data" readonly>
                                    <?php } else { ?>
                                        <input type="name" name="jk" value="Laki-Laki" class="form-control data" readonly>
                                    <?php } ?>
                                    <!-- <select name="jk" id="" class="form-control data" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="P">Perempuan</option>
                                        <option value="L">Laki-Laki</option>
                                    </select> -->
                                </td>
                            </tr>
                            <?php foreach ($variabel as $v) { ?>
                                <tr>
                                    <td><?= $v['variabel'] ?></td>
                                    <td>:</td>
                                    <td>
                                        <input name="idvar[]" type="hidden" id="idvar[]" value="<?php echo "$v[idvariabel]"; ?>" />
                                        <input name="nilai[]" type="text" id="nilai[]" class="form-control data_anak" autocomplete='off'/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <?php

                                        if ($v['variabel'] == "Umur") {

                                            echo "$v[atr1] = $v[nilai1]-$v[nilai11]<br />";
                                            echo "$v[atr2] = $v[nilai2]-$v[nilai22]<br />";
                                            echo "$v[atr3] = $v[nilai3]-$v[nilai33]<br />";
                                            echo "$v[atr4] = $v[nilai4]-$v[nilai44]<br />";
                                            echo "$v[atr5] = $v[nilai5]-$v[nilai55]<br />";
                                        } else {

                                            echo "$v[atr1] = $v[nilai1]-$v[nilai11]<br />";
                                            echo "$v[atr2] = $v[nilai2]-$v[nilai22]<br />";
                                            echo "$v[atr3] = $v[nilai3]-$v[nilai33]<br />";
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            <!-- <tr>
                                <td>Tanggal Lahir
                                    <label>*</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <input type="date" name="tgl_lahir" value="<?= $tgl_lahir ?>" class="form-control data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Berat Badan Sekarang
                                    <label>*</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <div class="data_anak input-group">
                                        <input type="number" name="berat" class="form-control" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Kg</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan Sekarang
                                    <label>*</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <div class="data_anak input-group">
                                        <input type="number" name="tinggi" class="form-control" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Cm</span>
                                        </div>
                                    </div>
                                </td>
                            </tr> -->
                            <tr>
                                <td colspan="3" align=center>
                                    <input type="submit" name="submit" value="Diagnosa" id="" class="btn btn-success">
                                    <input type="reset" name="reset" class="btn btn-danger">
                                    <!-- <a href="#" data-toggle="modal" data-target="#exampleModal<?= $nama; ?>" class="btn btn-primary circle arrow">Profil Anak</!-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</section>