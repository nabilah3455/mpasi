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
                Tambah Menu MPASI
            </div>
        </div>
        <div class="ibox-body">
            <form action="<?= base_url('menu/update_menu') ?>" method="POST">
            {data_menu}
                <div class="row">
                    <div class="col-lg-3">
                        <label>Id Menu</label>
                        <input type="text" name="id_menu" id="" placeholder="input id" value="{id_menu}" class="form-control" maxlength="5" readonly/>
                    </div>
                    <div class="col-lg-9">
                        <label>Judul Menu</label>
                        <input type="text" name="judul_menu" value="{judul_menu}" id="" placeholder="input judul" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Bahan Menu</label>
                        <textarea name="bahan" id="" cols="30" rows="10" class="form-control" maxlength="2000" placeholder="tulis disini...">{bahan_menu}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <label style="padding-top: 1rem;">Resep Menu</label>
                        <textarea name="resep" id="" cols="30" rows="10" class="form-control" maxlength="2000" placeholder="tulis disini...">{resep_menu}</textarea>
                    </div>
                    <div class="button col-lg-12">
                        <input type="submit" name="submit" class="btn btn-success" value="Edit Menu">
                        <a href={back} class="btn btn-warning">Cancel</a>
                    </div>
                </div>
                {/data_menu}
            </form>
        </div>
    </div>
</div>