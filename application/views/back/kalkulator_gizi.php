<style>
    .add-btn {
        padding-bottom: 1rem;
    }

    #line_chart {
        width: 60%;
    }

    .ibox-head {
        font-weight: bold;
        font-size: 18px;
    }
</style>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-12">
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
                    <a href="#edi_umur" data-toggle="modal"><i class="fa fa-edit"></i></a>
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
                    Rule
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
                                        <a href="<?= base_url('kalkulator/edit_rule') ?>?idrule=<?= $r['idrule']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="#myModal" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
    <div id="myModal" class="modal fade">
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
<?php foreach ($umur as $u) { ?>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title w-100">Hapus Rule <b> <?= $u['idrule'] ?></b> ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <!-- <div class="modal-body">
                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                    </div> -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" onclick="window.location.href='<?= base_url('kalkulator/delete_rule') ?>?idrule=<?= $u['idrule'] ?>'" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
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
                }, {
                    label: "Data 2",
                    // backgroundColor: "#DADDE0",
                    borderColor: "#DADDE0",
                    data: [20, 40, 60, 30, 83, 44, 59]
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