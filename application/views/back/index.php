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
                        <th width="25%">Judul Berita</th>
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
                            <td><?= nl2br($b['isi_news']) ?></td>
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