<?php include 'functions.php';?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));?>
<style type="text/css">
  .judul{
    font-size: 20px;
  }
</style>
<body onLoad="window.print()">
  <table border="0" align="center">
     <tr> <td><p align="center" class="judul"><b>MEOWCARE</b></p></td></tr>
     <tr> <td><p align="center" class="judul"><b>SISTEM PAKAR DIAGNOSA PENYAKIT KUCING</b></p></td></tr>
     <tr> <td><p align="center" class="judul"><b>MENGGUNAKAN METODE FORWARD CHAINING DAN CERTAINTY FACTOR</b></p></td></tr>
  </table>
  <hr width="100%" align="center" color="#000">
  <br>
<table width="1042" height="79" border="1" cellpadding="2" cellspacing="2">
  <tr>
    <td width="50" align="center" valign="middle"><b>No</b></td>
    <td width="180" align="center" valign="middle"><b>Nama</b></td>
    <td width="220" align="center" valign="middle"><b>No. Hp</b></td>
    <td width="150" align="center" valign="middle"><b>Jenis Kelamin</b></td>
    <td width="180" align="center" valign="middle"><b>Alamat</b></td>
    <td width="150" align="center" valign="middle"><b>Tanggal Konsultasi</b></td>
    <td width="218" align="center" valign="middle"><b>Hasil Konsultasi</b></td>
    <td width="70" align="center" valign="middle"><b>Kepercayaan</b></td>
  </tr>
  <?php
  ;
 require_once'functions.php';
    $q = esc_field($_GET['q']);
    $rows = $db->get_results("SELECT DISTINCT nama,no_hp,jk,alamat,tgl,hasil_konsultasi,kepercayaan FROM tb_hasil");
    $no=0;
    $rows = $db->get_results("SELECT * FROM tb_hasil 
    WHERE nama LIKE '%$q%' AND kepercayaan > 10
    ORDER BY id");
    foreach($rows as $row):?>
    <tr>
    <td align="center"> <?=++$no?></td>
    <td align="center"> <?=$row->nama ?></td>
    <td valign="middle"> <?=$row->no_hp ?></td>
    <td > <?=$row->jk ?></td>
    <td align="center"> <?=$row->alamat ?></td>
    <td > <?=$row->tgl ?></td>
    <td > <?=$row->hasil_konsultasi ?></td>
    <td align="center" valign="middle"><?=$row->kepercayaan ?></td>
    
  </tr>
  <?php endforeach;   ?>
</table>
</body>