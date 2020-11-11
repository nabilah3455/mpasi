<style>
    .ibox-head {
        font-weight: bold;
        font-size: 18px;
    }

    .tinggi .modal-body input,
    .berat .modal-body input,
    .umur .modal-body input,
    .gizi .modal-body input {
        width: 25%;
    }

    .then {
        padding: 1rem;
        font-weight: bold;
    }

    .ket {
        color: red;
    }

    input:read-only {
        cursor: no-drop;
    }

    .judul{
        font-size: 40px;
        font-weight: bold;
    }
</style>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-12">
            <div class="judul">
                Kalkulator Gizi
            </div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-lg-9">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Grafik</div>
                </div>
                <div class="ibox-body">
                    <div>
                        <canvas id="bar_chart" style="height:260px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-head">
                    Tahap Umur
                    <a href="#edit_umur" data-toggle="modal"><i class="fa fa-edit"></i></a>
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <?php foreach ($umur as $u) { ?>
                            <tr>
                                <th><?= $u['atr1'] ?></th>
                                <td><?= $u['nilai1'] ?>&nbsp;-&nbsp;<?= $u['nilai11'] ?></td>
                            </tr>
                            <tr>
                                <th><?= $u['atr2'] ?></th>
                                <td><?= $u['nilai2'] ?>&nbsp;-&nbsp;<?= $u['nilai22'] ?></td>
                            </tr>
                            <tr>
                                <th><?= $u['atr3'] ?></th>
                                <td><?= $u['nilai3'] ?>&nbsp;-&nbsp;<?= $u['nilai33'] ?></td>
                            </tr>
                            <tr>
                                <th><?= $u['atr4'] ?></th>
                                <td><?= $u['nilai4'] ?>&nbsp;-&nbsp;<?= $u['nilai44'] ?></td>
                            </tr>
                            <tr>
                                <th><?= $u['atr5'] ?></th>
                                <td><?= $u['nilai5'] ?>&nbsp;-&nbsp;<?= $u['nilai55'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="ibox">
                <div class="ibox-head">
                    Tinggi Badan
                    <a href="#edit_tinggi" data-toggle="modal"><i class="fa fa-edit"></i></a>
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <?php foreach ($tinggi as $t) { ?>
                            <tr>
                                <th><?= $t['atr1'] ?></th>
                                <td><?= $t['nilai1'] ?>&nbsp;-&nbsp;<?= $t['nilai11'] ?></td>
                            </tr>
                            <tr>
                                <th><?= $t['atr2'] ?></th>
                                <td><?= $t['nilai2'] ?>&nbsp;-&nbsp;<?= $t['nilai22'] ?></td>
                            </tr>
                            <tr>
                                <th><?= $t['atr3'] ?></th>
                                <td><?= $t['nilai3'] ?>&nbsp;-&nbsp;<?= $t['nilai33'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox">
                <div class="ibox-head">
                    Berat Badan
                    <a href="#edit_berat" data-toggle="modal"><i class="fa fa-edit"></i></a>
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <?php foreach ($berat as $b) { ?>
                            <tr>
                                <th><?= $b['atr1'] ?></th>
                                <td><?= $b['nilai1'] ?>&nbsp;-&nbsp;<?= $b['nilai11'] ?></td>
                            </tr>
                            <tr>
                                <th><?= $b['atr2'] ?></th>
                                <td><?= $b['nilai2'] ?>&nbsp;-&nbsp;<?= $b['nilai22'] ?></td>
                            </tr>
                            <tr>
                                <th><?= $b['atr3'] ?></th>
                                <td><?= $b['nilai3'] ?>&nbsp;-&nbsp;<?= $b['nilai33'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-head">
                    Nilai Gizi
                    <a href="#edit_gizi" data-toggle="modal"><i class="fa fa-edit"></i></a>
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <?php foreach ($gizi as $g) { ?>
                            <tr>
                                <th><?= $g['atr1'] ?></th>
                                <th><?= $g['atr2'] ?></th>
                                <th><?= $g['atr3'] ?></th>
                                <th><?= $g['atr4'] ?></th>
                                <th><?= $g['atr5'] ?></th>
                            </tr>
                            <tr>
                                <td><?= $g['nilai1'] ?>&nbsp;-&nbsp;<?= $g['nilai11'] ?></td>
                                <td><?= $g['nilai2'] ?>&nbsp;-&nbsp;<?= $g['nilai22'] ?></td>
                                <td><?= $g['nilai3'] ?>&nbsp;-&nbsp;<?= $g['nilai33'] ?></td>
                                <td><?= $g['nilai4'] ?>&nbsp;-&nbsp;<?= $g['nilai44'] ?></td>
                                <td><?= $g['nilai5'] ?>&nbsp;-&nbsp;<?= $g['nilai55'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-head">
                    Nilai Rule
                    <a href="#add_rule" data-toggle="modal"><i class="fa fa-plus"></i>Tambah Rule</a>
                </div>
                <div class="ibox-body">
                    <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="8%">Rule</th>
                                <th>Aturan (Rule)</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($rule as $r) { ?>
                                <tr>
                                    <td>
                                        <div align="left"><?php echo "$no"; ?>.</div>
                                    </td>
                                    <td>
                                        <div align="left"><?php echo "$r[idrule]"; ?></div>
                                    </td>
                                    <td>
                                        <div align="left">
                                            <?php
                                            // $z = mysql_num_rows(mysql_query("select * from rule1 where idrule='$b[0]'"));
                                            $z = $this->modgizi->get_rule1($r['idrule']);
                                            // $c = mysql_query("select * from rule1 where idrule='$b[0]' order by idvariabel asc");
                                            $c = $this->modgizi->data_rule1($r['idrule']);
                                            $i = 1;
                                            foreach ($c as $d) {
                                                // $e = mysql_fetch_array(mysql_query("select * from variabel where idvariabel='$d[idvariabel]'"));
                                                $var = $this->modgizi->get_var_rule($d['idvariabel']);
                                                foreach ($var as $e) {
                                                    if ($i == $z) {
                                                        echo "$e[variabel] <font color=black>$d[rule1]</font> ";
                                                        echo " Then <font color=brown><strong>$r[maka]</strong></font>";
                                                    } else {
                                                        echo "$e[variabel] <font color=black>$d[rule1]</font> <font color=red>And</font> ";
                                                    }
                                                    $i++;
                                                }
                                            }

                                            ?>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#edit_rule<?= $r['idrule'] ?>" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <!-- <a href="<?= base_url('kalkulator/edit_rule') ?>?idrule=<?= $r['idrule']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> -->
                                        <a href="#myModal<?= $r['idrule'] ?>" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal HTML -->
<?php foreach ($rule as $r) { ?>
    <div id="myModal<?= $r['idrule'] ?>" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title w-100">Hapus Rule <b> <?= $r['idrule'] ?></b> ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" onclick="window.location.href='<?= base_url('kalkulator/delete_rule') ?>?idrule=<?= $r['idrule'] ?>'" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal umur -->
<?php foreach ($tinggi as $t) { ?>
    <div id="edit_tinggi" class="modal fade tinggi">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title w-100">Edit Nilai Tinggi Badan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" style="color: black;">
                    <form action="<?= base_url('kalkulator/update_tinggi') ?>" method="POST">
                        <table width="100%">
                            <tr>
                                <td width="25%"><?= $t['atr1'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai1" value="<?= $t['nilai1'] ?>" id=""> - <input type="number" name="nilai11" value="<?= $t['nilai11'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $t['atr2'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai2" value="<?= $t['nilai2'] ?>" id=""> - <input type="number" name="nilai22" value="<?= $t['nilai22'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $t['atr3'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai3" value="<?= $t['nilai3'] ?>" id=""> - <input type="number" name="nilai33" value="<?= $t['nilai33'] ?>" id="">
                                </td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit" value="Update Data" class="btn btn-success">
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal umur -->
<?php foreach ($berat as $b) { ?>
    <div id="edit_berat" class="modal fade berat">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title w-100">Edit Nilai Berat Badan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="<?= base_url('kalkulator/update_berat') ?>" method="POST">
                    <div class="modal-body" style="color: black;">
                        <table width="100%">
                            <tr>
                                <td width="40%"><?= $b['atr1'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai1" value="<?= $b['nilai1'] ?>" id=""> - <input type="number" name="nilai11" value="<?= $b['nilai11'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $b['atr2'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai2" value="<?= $b['nilai2'] ?>" id=""> - <input type="number" name="nilai22" value="<?= $b['nilai22'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $b['atr3'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai3" value="<?= $b['nilai3'] ?>" id=""> - <input type="number" name="nilai33" value="<?= $b['nilai33'] ?>" id="">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <input type="submit" name="submit" value="Update Data" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal umur -->
<?php foreach ($umur as $u) { ?>
    <div id="edit_umur" class="modal fade umur">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title w-100">Edit Nilai Umur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" style="color: black;">
                    <form action="<?= base_url('kalkulator/update_umur') ?>" method="POST">
                        <table width="100%">
                            <tr>
                                <td width="25%"><?= $u['atr1'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai1" value="<?= $u['nilai1'] ?>" id=""> - <input type="number" name="nilai11" value="<?= $u['nilai11'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $u['atr2'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai2" value="<?= $u['nilai2'] ?>" id=""> - <input type="number" name="nilai22" value="<?= $u['nilai22'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $u['atr3'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai3" value="<?= $u['nilai3'] ?>" id=""> - <input type="number" name="nilai33" value="<?= $u['nilai33'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $u['atr4'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai4" value="<?= $u['nilai4'] ?>" id=""> - <input type="number" name="nilai44" value="<?= $u['nilai44'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $u['atr5'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai5" value="<?= $u['nilai5'] ?>" id=""> - <input type="number" name="nilai55" value="<?= $u['nilai55'] ?>" id="">
                                </td>
                            </tr>
                        </table>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="submit" value="Update Data" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal umur -->
<?php foreach ($gizi as $g) { ?>
    <div id="edit_gizi" class="modal fade gizi">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title w-100">Edit Nilai Gizi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="<?= base_url('kalkulator/update_gizi') ?>" method="POST">
                    <div class="modal-body" style="color: black;">
                        <table width="100%">
                            <tr>
                                <td width="25%"><?= $g['atr1'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai1" value="<?= $g['nilai1'] ?>" id=""> - <input type="number" name="nilai11" value="<?= $g['nilai11'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $g['atr2'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai2" value="<?= $g['nilai2'] ?>" id=""> - <input type="number" name="nilai22" value="<?= $g['nilai22'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $g['atr3'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai3" value="<?= $g['nilai3'] ?>" id=""> - <input type="number" name="nilai33" value="<?= $g['nilai33'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $g['atr4'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai4" value="<?= $g['nilai4'] ?>" id=""> - <input type="number" name="nilai44" value="<?= $g['nilai44'] ?>" id="">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><?= $g['atr5'] ?></td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="number" name="nilai5" value="<?= $g['nilai5'] ?>" id=""> - <input type="number" name="nilai55" value="<?= $g['nilai55'] ?>" id="">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <input type="submit" name="submit" value="Update Data" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal umur -->

<?php foreach ($rule as $r) { ?>
    <div id="edit_rule<?= $r['idrule'] ?>" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title w-100">Edit Nilai Rule <?= $r['idrule'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="<?= base_url('kalkulator/update_rule') ?>" method="POST">
                    <div class="modal-body" style="color: black;">
                        <table width="100%">
                            <tr>
                                <td width="30%" align="left">Nama Rule</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="text" name="idrule" value="<?= $r['idrule'] ?>" id="" readonly />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="then">Jika</td>
                            </tr>
                            <?php
                            $z = $this->modgizi->get_rule1($r['idrule']);
                            // $c = mysql_query("select * from rule1 where idrule='$b[0]' order by idvariabel asc");
                            $c = $this->modgizi->get_data_rule1($r['idrule']);
                            foreach ($c as $d) {
                                $var = $this->modgizi->get_var_rule($d['idvariabel']);
                                foreach ($var as $e) {
                                    if ($e['variabel'] == 'Umur') { ?>
                                        <tr>
                                            <td align="left"><?= $e['variabel'] ?></td>
                                            <td width="5%">:</td>
                                            <td align="left">
                                                <select name="umur" id="">
                                                    <option value="<?= $d['rule1'] ?>"><?= $d['rule1'] ?></option>
                                                    <option value="Tahap 1">Tahap 1</option>
                                                    <option value="Tahap 2">Tahap 2</option>
                                                    <option value="Tahap 3">Tahap 3</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php } elseif ($e['variabel'] == 'Berat Badan') { ?>
                                        <tr>
                                            <td align="left"><?= $e['variabel'] ?></td>
                                            <td width="5%">:</td>
                                            <td align="left">
                                                <select name="berat" id="">
                                                    <option value="<?= $d['rule1'] ?>"><?= $d['rule1'] ?></option>
                                                    <option value="Kurang Berat">Kurang Berat</option>
                                                    <option value="Normal">Normal</option>
                                                    <option value="Berat Lebih">Berat Lebih</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td align="left"><?= $e['variabel'] ?></td>
                                            <td width="5%">:</td>
                                            <td align="left">
                                                <select name="tinggi" id="">
                                                    <option value="<?= $d['rule1'] ?>"><?= $d['rule1'] ?></option>
                                                    <option value="Pendek">Pendek</option>
                                                    <option value="Normal">Normal</option>
                                                    <option value="Tinggi">Tinggi</option>
                                                </select>
                                            </td>
                                        </tr>
                            <?php }
                                }
                            }
                            ?>
                            <tr>
                                <td colspan="3" class="then">Hasil</td>
                            </tr>
                            <tr>
                                <td align="left">Maka</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="text" name="maka" value="<?= $r['maka'] ?>" id="" width="50%">
                            </tr>
                            <tr>
                                <td align="left">Output</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <select name="daerah" id="">
                                        <option value="<?= $r['daerah'] ?>"><?= $r['daerah'] ?></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td align="left"><label for="" class="ket">*</label>Keterangan <br>
                                    1. Gizi Anak Buruk <br>
                                    2. Gizi Anak Kurang <br>
                                    3. Gizi Anak Normal <br>
                                    4. Gizi Anak Lebih <br>
                                    5. Gizi Anak Obesitas
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <input type="submit" name="submit" value="Update Data" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

    <div id="add_rule" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h5 class="modal-title w-100">Tambah Nilai Rule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="<?= base_url('kalkulator/tambah_rule') ?>" method="POST">
                    <div class="modal-body" style="color: black;">
                        <table width="100%">
                            <tr>
                                <td width="30%" align="left">Nama Rule</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="text" name="idrule"  id="" >
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="then">Jika</td>
                            </tr>
                            <tr>
                                <td align="left">Umur</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <select name="umur" id="">
                                        <option value=""></option>
                                        <option value="Tahap 1">Tahap 1</option>
                                        <option value="Tahap 2">Tahap 2</option>
                                        <option value="Tahap 3">Tahap 3</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">Berat Badan</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <select name="berat" id="">
                                        <option value=""></option>
                                        <option value="Kurang Berat">Kurang Berat</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Berat Lebih">Berat Lebih</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">Tinggi Badan</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <select name="tinggi" id="">
                                        <option value=""></option>
                                        <option value="Pendek">Pendek</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Tinggi">Tinggi</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="then">Hasil</td>
                            </tr>
                            <tr>
                                <td align="left">Maka</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <input type="text" name="maka" id="" width="50%">
                            </tr>
                            <tr>
                                <td align="left">Output</td>
                                <td width="5%">:</td>
                                <td align="left">
                                    <select name="daerah" id="">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td align="left"><label for="" class="ket">*</label>Keterangan <br>
                                    1. Gizi Anak Buruk <br>
                                    2. Gizi Anak Kurang <br>
                                    3. Gizi Anak Normal <br>
                                    4. Gizi Anak Lebih <br>
                                    5. Gizi Anak Obesitas
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <input type="submit" name="submit" value="Tambah Data Rule" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="<?= base_url('assets') ?>/js/app.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        var a = {
                labels: ["Januari", "Februari", "Maret", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    label: "Gizi Baik",
                    borderColor: 'rgba(52,152,219,1)',
                    // backgroundColor: 'rgba(52,152,219,1)',
                    pointBackgroundColor: 'rgba(52,152,219,1)',
                    data: [29, 48, 40, 19, 100, 31, 85]
                }, {
                    label: "Data 2",
                    // backgroundColor: "#DADDE0",
                    borderColor: "#DADDE0",
                    data: [45, 80, 58, 74, 54, 59, 40]
                }]
            },
            t = {
                responsive: !0,
                maintainAspectRatio: !1
            },
            e = document.getElementById("bar_chart").getContext("2d");
        new Chart(e, {
            type: "line",
            data: a,
            options: t
        });
    });
</script>