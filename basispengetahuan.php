<body class="latar">
<div class="page-header">
    <h1 style="color: #fff;" align="center"><b>Basis Pengetahuan</b></h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading" align="right">
        <form class="form-inline">
            <input type="hidden" name="m" value="basispengetahuan" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian..." name="q" value="<?=@$_GET['q']?>" />
            </div>
            <div class="form-group">
                <button class="btn tambah"><span class="glyphicon glyphicon-search"></span></button>
            </div>
            <span class="pull-left">
            <div class="form-group">
                <a class="btn tambah" href="?m=basispengetahuan_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
            </div></span>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead><tr class="nw">
                <th>No</th>
                <th>Penyakit</th>
                <th>Gejala</th>
                <th>MB</th>
                <th>MD</th>
                <th>Aksi</th>
            </tr></thead>
            <?php
            $q = esc_field(@$_GET['q']);
            $rows = $db->get_results("SELECT r.ID, r.kode_gejala, d.kode_penyakit, r.mb, r.md, g.nama_gejala, d.nama_penyakit 
                FROM tb_basispengetahuan r INNER JOIN tb_penyakit d ON d.`kode_penyakit`=r.`kode_penyakit` INNER JOIN tb_gejala g ON g.`kode_gejala`=r.`kode_gejala`
                WHERE r.kode_gejala LIKE '%$q%'
                    OR r.kode_penyakit LIKE '%$q%'
                    OR g.nama_gejala LIKE '%$q%'
                    OR d.nama_penyakit LIKE '%$q%' 
                ORDER BY r.kode_penyakit, r.kode_gejala");
            $no=0;
            
            foreach($rows as $row):?>
            <tr>
                <td><?=++$no ?></td>
                <td>[<?=$row->kode_penyakit . '] ' . $row->nama_penyakit?></td>
                <td>[<?=$row->kode_gejala . '] ' . $row->nama_gejala?></td>
                <td><?=$row->mb?></td>
                <td><?=$row->md?></td>
                <td class="nw">
                    <a class="btn btn-xs edit" href="?m=basispengetahuan_ubah&ID=<?=$row->ID?>"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btn btn-xs edit" href="aksi.php?act=basispengetahuan_hapus&ID=<?=$row->ID?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>