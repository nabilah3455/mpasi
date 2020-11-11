<style>
    .add-btn {
        padding-bottom: 1rem;
    }

    .table th {
        text-align: center;
    }
</style>

<div class="page-content fade-in-up">
    <div class="col-lg-12">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="ibox">
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
                        <th width="30%">Judul Berita</th>
                        <th>Isi</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_berita as $b) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $b['judul_news'] ?></td>
                            <td align="center">
                                <button type="button" data-toggle="modal" data-target="#exampleModalLong<?= $b['id_news'] ?>">
                                    Lihat Isi Berita
                                </button>
                            </td>
                            <td>
                                <a href="<?= base_url('berita/edit') ?>?id=<?= $b['id_news'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('berita/delete') ?>?id=<?= $b['id_news'] ?>" onclick="return confirm('Yakin Hapus berita Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach ($data_berita as $b) { ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong<?= $b['id_news'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?= $b['judul_news'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= nl2br($b['isi_news']) ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
<?php } ?>