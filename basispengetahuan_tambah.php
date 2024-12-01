<body class="latar">
<div class="page-header">
    <h1 style="color: #fff;" align="center"><b>Tambah Basis Pengetahuan</b></h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post">
            <div class="form-group">
                <label style="color: #fff;">Penyakit <span class="text-danger">*</span></label>
                <select class="form-control" name="kode_penyakit">
                    <option value="">&nbsp;</option>
                    <?=CF_get_penyakit_option(set_value('kode_penyakit'))?>
                </select>
            </div>
            <div class="form-group">
                <label style="color: #fff;">Gejala <span class="text-danger">*</span></label>
                <select class="form-control" name="kode_gejala">
                    <option value="">&nbsp;</option>
                    <?=CF_get_gejala_option(set_value('kode_gejala'))?>
                </select>
            </div>
            <div class="form-group">
                <label style="color: #fff;">MB <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="mb" value="<?=set_value('md')?>" />
            <div class="form-group">
                <label style="color: #fff;">MD <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="md" value="<?=set_value('md')?>" />
            </div>
            <div class="form-group">
                <button class="btn tambah"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn edit" href="?m=basispengetahuan"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>