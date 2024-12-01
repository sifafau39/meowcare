<?php 
function TanggalIndonesia($date) {
    $date = date('Y-m-d',strtotime($date));
    if($date == '0000-00-00')
        return 'Tanggal Kosong';
 
    $tgl = substr($date, 8, 2);
    $bln = substr($date, 5, 2);
    $thn = substr($date, 0, 4);
 
    switch ($bln) {
        case 1 : {
                $bln = 'Januari';
            }break;
        case 2 : {
                $bln = 'Februari';
            }break;
        case 3 : {
                $bln = 'Maret';
            }break;
        case 4 : {
                $bln = 'April';
            }break;
        case 5 : {
                $bln = 'Mei';
            }break;
        case 6 : {
                $bln = "Juni";
            }break;
        case 7 : {
                $bln = 'Juli';
            }break;
        case 8 : {
                $bln = 'Agustus';
            }break;
        case 9 : {
                $bln = 'September';
            }break;
        case 10 : {
                $bln = 'Oktober';
            }break;
        case 11 : {
                $bln = 'November';
            }break;
        case 12 : {
                $bln = 'Desember';
            }break;
        default: {
                $bln = 'UnKnown';
            }break;
    }
 
 
    $tanggalIndonesia = "".$tgl . " " . $bln . " " . $thn;
    return $tanggalIndonesia;
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Meow Care</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link href="assets/css/yeti-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <link href="assets/css/select2.min.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
    <script src="assets/js/select2.min.js"></script>   
    <style type="text/css">

    .hi{
    background-image: linear-gradient(rgba(0, 0, 0, 0.0),rgba(0, 0, 0, 0.0)), url('konsultasi.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

</style>      
    </head>
    <body class="dark hi" >
<div class="page-header">
    <h1 style="color: #fff;">Isi Data Konsultasi</h1>
</div>

<form action="?m=daftar" method="post">
    <div class="form-group" style="width: 400px">
        <p style="color: #fff;" align="left"><b>Nama</b> <span class="text-danger">*</span></p>
        <p><input class="form-control" style="width: 400px" type="text" placeholder="Masukkan Nama" name="nama" value="<?=@$_GET['q']?>" /></p>
    </div>
  
    <div class="form-group" style="width: 400px">
        <p style="color: #fff;" align="left"><b>No. Hp</b> <span class="text-danger">*</span></p>
        <input style="color: #000;" class="form-control" type="text" name="no_hp" required placeholder="Masukkan Nomor Handphone" />
    </div>

    <div class="form-group" style="width: 400px">
        <p style="color: #fff;" align="left"><b>Jenis Kelamin</b> <span class="text-danger">*</span></p>
        <p align="left"> <input type="radio" name="jk" value="Laki - Laki"> Laki - Laki <input type="radio" name="jk" value="Perempuan"> Perempuan</p>
    </div>

    <div class="form-group" style="width: 400px">
        <p style="color: #fff;" align="left"><b>Alamat</b> <span class="text-danger">*</span></p>
        <input style="color: #000;" class="form-control" type="text" name="alamat" required placeholder="Masukkan Alamat" />
    </div>

    <div class="form-group" style="width: 400px">
        <p style="color: #fff;" align="left"><b>Tanggal Konsultasi</b> <span class="text-danger">*</span></p>
        <input type="text" class="form-control" readonly name="tgl" value="<?php date_default_timezone_set('Asia/jakarta'); 
            echo date('H:i');
            ?> WIB - <?= TanggalIndonesia(date('Y-m-d')) ?>" id="jam" />
    </div>

    <br>
    <div><button class="btn tambah" style="width: 300px">Lanjutkan <span class="glyphicon glyphicon-arrow-right"></span></button>
    </div>
</form>
</div>
</body>