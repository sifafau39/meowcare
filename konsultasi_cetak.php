<h1  align="center" style="font-size: 30px"><p>Hasil Konsultasi</p></h1>
<?php

$gejala = $_SESSION['gejala'] ;
$rows = $db->get_results("SELECT * FROM tb_gejala WHERE kode_gejala IN (SELECT kode_gejala FROM tb_konsultasi WHERE jawaban='Ya')");
?>


<div class="panel panel-default">
    <div class="panel-heading">        
        <h3 class="panel-title"><b>Biodata Konsultasi</b></h3>  
    </div>
    <table class="table table-bordered table-hover">
    <thead>
          <tr style="background-color: #DEB887; color: #fff;">
                <th>Nama</th>
                <th>No. Hp</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal Konsultasi</th>
            </tr></thead>
            <?php
            $q = esc_field(@$_GET['q']);
            $rowss = $db->get_results("SELECT * FROM tb_hasil  order by id desc limit 1");
            $no=0;
            foreach($rowss as $rowd):?>
            <tr>
                <td><?=$rowd->nama ?></td>
                <td><?=$rowd->no_hp?></td>
                <td><?=$rowd->jk?></td>
                <td><?=$rowd->alamat?></td>
                <td><?=$rowd->tgl?></td>
             </tr>
            <?php endforeach;?>
        </table>
    </div>

<div class="panel panel-default">
    <div class="panel-heading">
<h3 class="panel-title"><b>Gejala Terpilih</b></h3>
<table class="table table-bordered table-hover">
<thead>
    <tr style="background-color: #DEB887; color: #fff;">
        <th>No</th>
        <th>Nama Gejala</th>
    </tr>
</thead>
<?php
$no=1;
foreach($rows as $row):?>
<tr>
    <td><?=$no++?></td>
    <td><?=$row->nama_gejala?></td>
</tr>
<?php endforeach;?>
</table>
<?php
$rows = $db->get_results("SELECT * 
    FROM tb_basispengetahuan r INNER JOIN tb_penyakit d ON d.kode_penyakit = r.kode_penyakit      
    WHERE r.kode_gejala IN (SELECT kode_gejala FROM tb_konsultasi WHERE jawaban='Ya') ORDER BY r.kode_penyakit, r.kode_gejala");

foreach($rows as $row){
    @$penyakit[$row->kode_penyakit]['mb'] = $penyakit[$row->kode_penyakit]['mb'] + $row->mb * (1 - $penyakit[$row->kode_penyakit]['mb']);
    @$penyakit[$row->kode_penyakit]['md'] = $penyakit[$row->kode_penyakit]['md'] + $row->md * (1 - $penyakit[$row->kode_penyakit]['md']);
    
    @$penyakit[$row->kode_penyakit]['cf'] = $penyakit[$row->kode_penyakit]['mb'] -  $penyakit[$row->kode_penyakit]['md'];     
}
?>
<div class="panel panel-default">
    <div class="panel-heading"> 
<h3 class="panel-title">Hasil Analisa</h3>
<table class="table table-bordered table-hover ">
<thead>
    <tr style="background-color: #DEB887; color: #fff;">
        <th>No</th>
        <th>Penyakit</th>
        <th>Kepercayaan</th>
    </tr>
</thead>
<?php
$no=1;
function ranking($array){
    $new_arr = array();
    foreach($array as $key => $value) {
        $new_arr[$key] = $value['cf'];
    }
    arsort($new_arr);
    
    $result = array();    
    foreach($new_arr as $key => $value){
        @$result[$key] = ++$no;
    }    
    return $result;
}    

$rank = ranking($penyakit);

foreach($rank as $key => $value):?>
<tr class="<?=($value==1) ? 'text-primary' : ''; ?>">
    <td><?=$no++; ?></td>
    <td><?=$PENYAKIT[$key]->nama_penyakit; ?></td>
    <td><?=$penyakit[$key]['cf'] * 100; ?>%</td>
</tr>
<?php endforeach;
reset($rank);
?>
</table>

<div class="panel-body">
    <table class="table table-bordered">
        <tr>
            <td>Penyakit</td>
            <td><b><?=$PENYAKIT[key($rank)]->nama_penyakit; ?></b></td>
        </tr>
        <tr>
            <td>Solusi</td>
            <td><?=$PENYAKIT[key($rank)]->solusi; ?></td>
        </tr>
    </table>
    <br><a class="btn edit" style="background-color: #DEB887;"><b>Meow Care</b> - Treat, Protect and Love your Cat</a>
</div>