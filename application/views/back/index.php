<style>
    .add-btn {
        padding-bottom: 1rem;
    }
</style>

<div class="page-content fade-in-up">
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
                            <td><?= $b['isi_news'] ?></td>
                            <td>
                                <a href="<?= base_url('berita/edit') ?>?id=<?= $b['id_news'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="#myModal" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="material-icons">&#xE5CD;</i>
                </div>
                <h4 class="modal-title w-100">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>