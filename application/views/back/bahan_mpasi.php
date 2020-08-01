<style>
    .add-btn {
        padding-bottom: 1rem;
    }
</style>

<div class="page-content fade-in-up">
    <div class="col-lg-12">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Bahan MPASI</div>
        </div>
        <div class="ibox-body">
            <div class="add-btn">
                <a href="{tambah}" class="btn btn-success col-lg-12">Tambah Bahan MPASI</a>
            </div>
            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="1%">No.</th>
                        <th width="18%">Nama Bahan</th>
                        <th width="25%">Kandungan Bahan</th>
                        <th>Manfaat Bahan</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_bahan as $b) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $b['nama_bahan'] ?></td>
                            <td><?= nl2br($b['kandungan_bahan']) ?></td>
                            <td><?= nl2br($b['manfaat_bahan']) ?></td>
                            <td>
                                <a href="<?= base_url('bahan/edit') ?>?id=<?= $b['id_bahan'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('bahan/delete') ?>?id=<?= $b['id_bahan'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>