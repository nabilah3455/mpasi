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

    .nilai_gizi {
        color: red;
        font-style: italic;
        font-size: 12px;
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
                        <canvas id="line_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-head">
                    Tahap Umur
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Tahap 1</th>
                            <td>0-12 Bulan</td>
                        </tr>
                        <tr>
                            <th>Tahap 2</th>
                            <td>6-24 Bulan</td>
                        </tr>
                        <tr>
                            <th>Tahap 3</th>
                            <td>24-36 Bulan</td>
                        </tr>
                        <tr>
                            <th>Tahap 4</th>
                            <td>24-48 Bulan</td>
                        </tr>
                        <tr>
                            <th>Tahap 5</th>
                            <td>36-60 Bulan</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-head">
                    Berat Laki-Laki
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Kurang Berat</th>
                            <td>0-7 Kg</td>
                        </tr>
                        <tr>
                            <th>Normal</th>
                            <td>7-19 Kg</td>
                        </tr>
                        <tr>
                            <th>Berat Lebih</th>
                            <td>13-25 Kg</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-head">
                    Berat Perempuan
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Kurang Berat</th>
                            <td>0-7 Kg</td>
                        </tr>
                        <tr>
                            <th>Normal</th>
                            <td>7-18 Kg</td>
                        </tr>
                        <tr>
                            <th>Berat Lebih</th>
                            <td>12-26 Kg</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-head">
                    Tinggi Laki-Laki
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Pendek</th>
                            <td>0-49 Cm</td>
                        </tr>
                        <tr>
                            <th>Normal</th>
                            <td>49-101 Cm</td>
                        </tr>
                        <tr>
                            <th>Tinggi</th>
                            <td>75-124 Cm</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-head">
                    Tinggi Perempuan
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Pendek</th>
                            <td>0-48 Cm</td>
                        </tr>
                        <tr>
                            <th>Normal</th>
                            <td>48-100 Cm</td>
                        </tr>
                        <tr>
                            <th>Tinggi</th>
                            <td>74-123 Cm</td>
                        </tr>
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
                        <tr>
                            <th>Gizi Buruk</th>
                            <td>0-48</td>
                        </tr>
                        <tr>
                            <th>Gizi Kurang</th>
                            <td>43-53</td>
                        </tr>
                        <tr>
                            <th>Normal</th>
                            <td>48-70</td>
                        </tr>
                        <tr>
                            <th>Gizi Lebih</th>
                            <td>53-83</td>
                        </tr>
                        <tr>
                            <th>Obesitas</th>
                            <td>70-123</td>
                        </tr>
                    </table>
                    <label for="" class="nilai_gizi">Nilai Gizi = Berat Badan (Kg) / Tinggi Badan (Cm)</label>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Aturan Dalam Penentuan Status Gizi Tahap 1
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width=90%>Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>[R1] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah pendek, MAKA status gizinya adalah normal.</td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="#myModal" data-toggle="modal" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                                            <!-- <a href="<?= base_url('bahan/delete') ?>?id=<?= $b['id_bahan'] ?>" onclick="return confirm('Yakin Hapus <?= $b['nama_bahan']; ?> Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>[R2] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah normal, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R2] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah normal, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R3] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah tinggi, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R4] : JIKA berat badan adalah normal DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R5] : JIKA berat badan adalah normal DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R6] : JIKA berat badan adalah normal DAN tinggi badan adalah tinggi, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R7] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi lebih</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R7] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R9] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah tinggi, MAKA status gizinya adalah obesitas.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Aturan Dalam Penentuan Status Gizi Tahap 2
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width=90%>Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>[R10] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R11] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R12] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah tinggi, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R13] : JIKA berat badan adalah normal DAN tinggi badan adalah pendek, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R14] : JIKA berat badan adalah normal DAN tinggi badan adalah normal, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R15] : JIKA berat badan adalah normal DAN tinggi badan adalah tinggi, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R16] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R17] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R18] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah tinggi, MAKA status gizinya adalah obesitas.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Aturan Dalam Penentuan Status Gizi Tahap 3
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width=90%>Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>[R19] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi buruk.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R20] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi buruk.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R21] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah tinggi, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R22] : JIKA berat badan adalah normal DAN tinggi badan adalah pendek, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R23] : JIKA berat badan adalah normal DAN tinggi badan adalah normal, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R24] : JIKA berat badan adalah normal DAN tinggi badan adalah tinggi, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R25] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R26] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R27] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah tinggi, MAKA status gizinya adalah obesitas.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                Aturan Dalam Penentuan Status Gizi Tahap 4
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width=90%>Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>[R28] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R29] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R30] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah tinggi, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R31] : JIKA berat badan adalah normal DAN tinggi badan adalah pendek, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R32] : JIKA berat badan adalah normal DAN tinggi badan adalah normal, MAKA status gizinya adalah normal </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R33] : JIKA berat badan adalah normal DAN tinggi badan adalah tinggi, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R34] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi lebih </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R35] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi lebih </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R36] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah tinggi, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                Aturan Dalam Penentuan Status Gizi Tahap 5
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width=90%>Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>[R37] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi buruk.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R38] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi buruk.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R39] : JIKA berat badan adalah kurang berat DAN tinggi badan adalah tinggi, MAKA status gizinya adalah gizi buruk.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R40] : JIKA berat badan adalah normal DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R41] : JIKA berat badan adalah normal DAN tinggi badan adalah normal, MAKAstatus gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R42] : JIKA berat badan adalah normal DAN tinggi badan adalah tinggi, MAKA status gizinya adalah gizi kurang.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R43] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah pendek, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R44] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah normal, MAKA status gizinya adalah gizi lebih.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>[R45] : JIKA berat badan adalah berat lebih DAN tinggi badan adalah tinggi, MAKA status gizinya adalah normal.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        // Line Chart example

        var lineData = {

            labels: ["January", "February", "March", "April"],
            datasets: [{
                    label: "Data 1",
                    backgroundColor: 'rgba(52,152,219, 0.9)',
                    borderColor: 'rgba(52,152,219, 1)',
                    pointBorderColor: "#fff",
                    data: [28, 3, 40, 19, 86, 27],
                }, {
                    label: "Data 2",
                    backgroundColor: 'rgba(213,217,219, 0.9)',
                    borderColor: 'rgba(213,217,219, 1)',
                    pointBorderColor: "#fff",
                    data: [65, 59, 80, 81, 56, 55],

                }, {
                    label: "Data 2",
                    backgroundColor: 'rgba(213,217,219, 0.9)',
                    borderColor: 'rgba(213,217,219, 1)',
                    pointBorderColor: "#fff",
                    data: [65, 59, 80, 81, 56, 55],
                }

            ]
        };

        var lineOptions = {
            responsive: true,
            maintainAspectRatio: false
        };
        var ctx = document.getElementById("line_chart").getContext("2d");

        new Chart(ctx, {
            type: 'line',
            data: lineData,
            options: lineOptions
        });
    });
</script>