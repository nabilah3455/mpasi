<style>
    .button {
        padding-top: 1rem;
        float: left;
    }
</style>

<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                Tambah Bahan MPASI
            </div>
        </div>
        <div class="ibox-body">
            <form action="<?= base_url('bahan/insert_bahan') ?>" method="POST">
                <div class="row">
                    <div class="col-lg-3">
                        <label>Id Bahan</label>
                        <input type="text" name="id_bahan" id="" placeholder="input id" class="form-control" maxlength="5">
                    </div>
                    <div class="col-lg-9">
                        <label>Nama Bahan</label>
                        <input type="text" name="nama_bahan" id="" placeholder="input nama bahan" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Kandungan Bahan</label>
                        <textarea name="kandungan_bahan" id="" cols="30" rows="10" class="form-control" maxlength="500" placeholder="tulis disini..."></textarea>
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Manfaat Bahan</label>
                        <textarea name="manfaat_bahan" id="" cols="30" rows="10" class="form-control" maxlength="50000" placeholder="tulis disini..."></textarea>
                    </div>
                    <div class="button col-lg-12">
                        <input type="submit" name="submit" class="btn btn-success" value="Tambah Bahan MPASI">
                        <a href={back} class="btn btn-warning">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>