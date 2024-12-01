<?php 
    
    require_once 'functions.php';
    $nama =$_POST['nama'];
    $email =$_POST['email'];
    $no_hp=$_POST['no_hp'];
    $tgl=$_POST['tgl'];
    $pesan =$_POST['pesan'];
    
    $db->query("INSERT INTO tb_pesan(nama, email, no_hp, tgl, pesan) VALUES('$nama','$email','$no_hp','$tgl','$pesan')");
    
    echo "<meta http-equiv='refresh'>";
    echo "<h3><b>Terimakasih Sudah Mengirim Pesan</b></h3>";
    echo "<h3>--------------------------------------------------------</h3>";
    echo "<h5><b>Pesan akan segera dibalas melalui Email :)</h5></b><br><br>";
?>

    <br><br>
    <a class="btn edit" style="background-color: #DEB887;" href="index.php?"><span class=""></span> Kembali ke Beranda</a>


