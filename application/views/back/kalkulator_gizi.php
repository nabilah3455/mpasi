<style>
    .add-btn {
        padding-bottom: 1rem;
    }
</style>

<div class="page-content fade-in-up">
    <div class="col-lg-12">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <!-- <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Berita MPASI</div>
        </div>
        <div class="ibox-body">
            <div class="add-btn">
                <a href="{tambah}" class="btn btn-success col-lg-12">Tambah Berita</a>
            </div>
            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="1%">No.</th>
                        <th width="20%">Tinggi Badan</th>
                        <th width="20%">Berat Badan</th>
                        <th width="20%">Usia</th>
                        <th>Tanggal Cek</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_gizi as $b) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $b['tb'] ?></td>
                            <td><?= $b['bb'] ?></td>
                            <td><?= $b['usia'] ?></td>
                            <td><?= $b['tgl_cek'] ?></td>
                            <td>
                                <a href="<?= base_url('menu/edit') ?>?id=<?= $b['id_menu'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('menu/delete') ?>?id=<?= $b['id_menu'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div> -->
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Line Chart</div>
        </div>
        <div class="ibox-body">
            <div>
                <canvas id="line_chart" style="height:500px;"></canvas>
            </div>
        </div>
    </div>
</div>