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
                Edit Berita
            </div>
        </div>
        <div class="ibox-body">
            <form action="<?= base_url('berita/update_berita') ?>" method="POST">
            {data_berita}
                <div class="row">
                    <div class="col-lg-3">
                        <label>Id Berita</label>
                        <input type="text" name="id_berita" id="" placeholder="input id" value="{id_news}" class="form-control" maxlength="5" readonly/>
                    </div>
                    <div class="col-lg-9">
                        <label>Judul Berita</label>
                        <input type="text" name="judul_berita" id="" value="{judul_news}" placeholder="input judul" class="form-control">
                    </div>
                    <div class="col-lg-12">
                        <label style="padding-top: 1rem;">Isi Berita</label>
                        <textarea name="isi_berita" id="" cols="30" rows="10" class="form-control" maxlength="2000" placeholder="tulis disini...">{isi_news}</textarea>
                    </div>
                    <div class="button col-lg-12">
                        <input type="submit" name="submit" class="btn btn-success" value="Edit Berita">
                        <a href={back} class="btn btn-warning">Cancel</a>
                    </div>
                </div>
                {/data_berita}
            </form>
        </div>
    </div>
</div>