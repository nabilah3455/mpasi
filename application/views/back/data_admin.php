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
            <div class="ibox-title">Data Admin</div>
        </div>
        <div class="ibox-body">
            <div class="add-btn">
                <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success col-lg-12">Tambah Data Admin</button>
            </div>
            <table class="table table-striped table-bordered zero-configuration" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="1%">No.</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_admin as $b) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $b['username'] ?></td>
                            <td><?= $b['password'] ?></td>
                            <td>
                                <button data-toggle="modal" data-target="#edit_admin_<?= $b['id_admin'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                <a href="<?= base_url('admin/delete') ?>?id=<?= $b['id_admin'] ?>" onclick="return confirm('Yakin Hapus Menu MPASI Ini?')" class=" btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php foreach ($data_admin as $a) { ?>
    <div class="modal fade" id="edit_admin_<?= $a['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('user/update_admin') ?>" method="POST">
                        <div class="col-lg-12">
                            <input type="hidden" name="id_admin" id="" value="<?= $a['id_admin'] ?>" placeholder="input username" class="form-control">
                            <br>
                            <label>Username</label>
                            <input type="text" name="username" id="" value="<?= $a['username'] ?>" placeholder="input username" class="form-control">
                            <br>
                            <label>Password</label>
                            <input type="password" name="password" id="" value="<?= $a['password'] ?>" placeholder="input password" class="form-control" maxlength="9">
                        </div>
                </div>
                <?php } ?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" class="btn btn-success" value="Tambah Data Admin">
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('user/insert_admin') ?>" method="POST">
                    <div class="col-lg-12">
                        <label>Username</label>
                        <input type="text" name="username" id="" placeholder="input username" class="form-control">
                        <br>
                        <label>Password</label>
                        <input type="password" name="password" id="" placeholder="input password" class="form-control" maxlength="9">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-success" value="Tambah Data Admin">
            </div>
            </form>
        </div>
    </div>
</div>