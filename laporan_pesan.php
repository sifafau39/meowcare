<body class="latar">
<div class="page-header">
    <h1 style="color: #fff;" align="center"><b>Pesan</b></h1>
</div>

<div class="panel panel-default">
    <div class="panel-heading">       
        <form class="form-inline">
            <input type="hidden" name="m" value="laporan_pesan" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian..." name="q" value="<?=@$_GET['q']?>" />
            </div>
            <div class="form-group">
                <button class="btn tambah"><span class="glyphicon glyphicon-search"></span></button>
            </div>
        </form>
    </div>

<div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
  <tr>
    <td width="50" align="center" valign="middle"><b>No</b></td>
    <td width="150" align="center" valign="middle"><b>Nama</b></td>
    <td width="100" align="center" valign="middle"><b>Email</b></td>
    <td width="100" align="center" valign="middle"><b>No.Hp</b></td>
    <td width="150" align="center" valign="middle"><b>Tanggal Pesan</b></td>
    <td width="100" align="center" valign="middle"><b>Pesan</b></td>
    <!-- <td width="70" align="center" valign="middle"><b>Kepercayaan</b></td> HILANGKAN KOMENTAR INI JIKA INGIN MENAMPILKKAN NILAI CF SESUAI KOMENTAR PADA FILE konsultasi_hasil.php -->
    <td width="76" align="center" valign="middle"><b>Aksi</b></td>
  </tr>

  <?php
 require_once'functions.php';
    $q = esc_field(@$_GET['q']);
    $rows = $db->get_results("SELECT DISTINCT nama, email, no_hp, tgl, pesan FROM tb_pesan");
    $no=0;
    $rows = $db->get_results("SELECT * FROM tb_pesan
     WHERE nama LIKE '%$q%' OR pesan LIKE '%$q%'
    ORDER BY ID");
            $no=0;
            foreach($rows as $row):?>
            <tr>
                <td align="center" valign="middle"><?=++$no?></td>
                <td valign="middle"> <?=$row->nama ?></td>
                <td valign="middle"> <?=$row->email ?></td>
                <td valign="middle"> <?=$row->no_hp ?></td>
                <td valign="middle"> <?=$row->tgl ?></td>
                <td valign="middle"> <?=$row->pesan ?></td>
                <td class="nw">
                    <a class="btn btn-xs edit" href="aksi.php?act=pesan_hapus&ID=<?=$row->ID?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
  <?php endforeach;
    ?>
</table>
</div></div>
</body>