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
                Edit Bahan MPASI
            </div>
        </div>
        <div class="ibox-body">
            <form action="<?= base_url('bahan/update_bahan') ?>" method="POST">
                {data_bahan}
                <div class="row">
                    <div class="col-lg-3">
                        <label>Id Bahan</label>
                        <input type="text" name="id_bahan" id="" placeholder="input id" value="{id_bahan}" class="form-control" maxlength="5" readonly />
                    </div>
                    <div class="col-lg-9">
                        <label>Nama Bahan</label>
                        <input type="text" name="nama_bahan" id="" value="{nama_bahan}" placeholder="input nama bahan" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Kandungan Bahan</label>
                        <textarea name="kandungan_bahan" id="" cols="30" rows="10" class="form-control" maxlength="500" placeholder="tulis disini...">{kandungan_bahan}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Manfaat Bahan</label>
                        <textarea name="manfaat_bahan" id="" cols="30" rows="10" class="form-control" maxlength="5000" placeholder="tulis disini...">{manfaat_bahan}</textarea>
                    </div>
                    <div class="button col-lg-12">
                        <input type="submit" name="submit" class="btn btn-success" value="Edit Bahan">
                        <a href={back} class="btn btn-warning">Cancel</a>
                    </div>
                </div>
                {/data_bahan}
            </form>
        </div>
    </div>
</div>