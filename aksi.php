<?php
require_once'functions.php';
 
if ($mod=='login'){
    $user = esc_field($_POST['user']);
    $pass = esc_field($_POST['pass']);
    
    $row = $db->get_row("SELECT * FROM tb_admin WHERE user='$user' AND pass='$pass'");
    if($row){
        $_SESSION['login'] = $row->user;
        redirect_js("index.php");
    } else{
        print_msg("Salah kombinasi username dan password.");
    }          
}else if ($mod=='password'){
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $pass3 = $_POST['pass3'];
    
    $row = $db->get_row("SELECT * FROM tb_admin WHERE user='$_SESSION[login]' AND pass='$pass1'");        
    
    if($pass1=='' || $pass2=='' || $pass3=='')
        print_msg('Field bertanda * harus diisi.');
    elseif(!$row)
        print_msg('Password lama salah.');
    elseif( $pass2 != $pass3 )
        print_msg('Password baru dan konfirmasi password baru tidak sama.');
    else{        
        $db->query("UPDATE tb_admin SET pass='$pass2' WHERE user='$_SESSION[login]'");                    
        print_msg('Password berhasil diubah.', 'success');
    }
} elseif($act=='logout'){
    unset($_SESSION['login']);
    header("location:index.php?m=login");
}

/** DIAGNOSA */
elseif($mod=='penyakit_tambah'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $solusi = $_POST['solusi'];
    if($kode=='' || $nama=='')
        print_msg("Field yang bertanda * tidak boleh kosong!");
    elseif($db->get_row("SELECT * FROM tb_penyakit WHERE kode_penyakit='$kode'"))
        print_msg("Kode sudah ada!");
    else{
        $db->query("INSERT INTO tb_penyakit (kode_penyakit, nama_penyakit, keterangan, solusi) VALUES ('$kode', '$nama', '$keterangan' , '$solusi')");                       
        redirect_js("index.php?m=penyakit");
    }
} else if($mod=='penyakit_ubah'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $solusi = $_POST['solusi'];
    if($kode=='' || $nama=='')
        print_msg("Field yang bertanda * tidak boleh kosong!");
    else{
        $db->query("UPDATE tb_penyakit SET nama_penyakit='$nama', keterangan='$keterangan' , solusi='$solusi' WHERE kode_penyakit='$_GET[ID]'");
        redirect_js("index.php?m=penyakit");
    }
} else if ($act=='penyakit_hapus'){
    $db->query("DELETE FROM tb_penyakit WHERE kode_penyakit='$_GET[ID]'");
    $db->query("DELETE FROM tb_basispengetahuan WHERE kode_penyakit='$_GET[ID]'");
    header("location:index.php?m=penyakit");
} 

/** GEJALA */    
elseif($mod=='gejala_tambah'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    
    if($kode=='' || $nama=='')
        print_msg("Field bertanda * tidak boleh kosong!");
    elseif($db->get_row("SELECT * FROM tb_gejala WHERE kode_gejala='$kode'"))
        print_msg("Kode sudah ada!");
    else{
        $db->query("INSERT INTO tb_gejala (kode_gejala, nama_gejala) VALUES ('$kode', '$nama')");                   
        redirect_js("index.php?m=gejala");
    }                    
} else if($mod=='gejala_ubah'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    
    if($kode=='' || $nama=='')
        print_msg("Field bertanda * tidak boleh kosong!");
    else{
        $db->query("UPDATE tb_gejala SET nama_gejala='$nama' WHERE kode_gejala='$_GET[ID]'");
        redirect_js("index.php?m=gejala");
    }    
} else if ($act=='gejala_hapus'){
    $db->query("DELETE FROM tb_gejala WHERE kode_gejala='$_GET[ID]'");
    $db->query("DELETE FROM tb_basispengetahuan WHERE kode_gejala='$_GET[ID]'");
    header("location:index.php?m=gejala");
} 
    
/** RELASI TAMBAH */ 
else if ($mod=='basispengetahuan_tambah'){
    $kode_penyakit = $_POST['kode_penyakit'];
    $kode_gejala = $_POST['kode_gejala'];
    $mb = $_POST['mb'];
    $md = $_POST['md'];
    
    $kombinasi_ada = $db->get_row("SELECT * FROM tb_basispengetahuan WHERE kode_penyakit='$kode_penyakit' AND kode_gejala='$kode_gejala'");
    
    if($kode_penyakit=='' || $kode_gejala=='' || $mb=='' || $md=='')
        print_msg("Field bertanda * tidak boleh kosong!");
    elseif($kombinasi_ada)
        print_msg("Kombinasi penyakit dan gejala sudah ada!");
    else{
        $db->query("INSERT INTO tb_basispengetahuan (kode_penyakit, kode_gejala, mb, md) VALUES ('$kode_penyakit', '$kode_gejala', '$mb', '$md')");
        redirect_js("index.php?m=basispengetahuan");
    }   
}else if ($mod=='basispengetahuan_ubah'){
    $kode_penyakit = $_POST['kode_penyakit'];
    $kode_gejala = $_POST['kode_gejala'];
    $mb = $_POST['mb'];
    $md = $_POST['md'];
    
    $kombinasi_ada = $db->get_row("SELECT * FROM tb_basispengetahuan WHERE kode_penyakit='$kode_penyakit' AND kode_gejala='$kode_gejala' AND ID<>'$_GET[ID]'");
    
    if($kode_penyakit=='' || $kode_gejala=='' || $mb=='' || $md=='')
        print_msg("Field bertanda * tidak boleh kosong!");
    elseif($kombinasi_ada)
        print_msg("Kombinasi penyakit dan gejala sudah ada!");
    else{
        $db->query("UPDATE tb_basispengetahuan SET kode_penyakit='$kode_penyakit', kode_gejala='$kode_gejala', mb='$mb', md='$md' WHERE ID='$_GET[ID]'");
        redirect_js("index.php?m=basispengetahuan");
    }  
    header("location:index.php?m=basispengetahuan");
} else if ($act=='basispengetahuan_hapus'){
    $db->query("DELETE FROM tb_basispengetahuan WHERE ID='$_GET[ID]'");
    header("location:index.php?m=basispengetahuan");
} else if ($act=='laporan_hapus'){
    $db->query("DELETE FROM tb_hasil WHERE ID='$_GET[ID]'");
    header("location:index.php?m=laporan");
} else if ($mod=='konsultasi') {
    if($_POST['yes'])
        $db->query("INSERT INTO tb_konsultasi (kode_gejala, jawaban) VALUES ('$_POST[kode_gejala]', 'Ya')");
    elseif($_POST['no'])
        $db->query("INSERT INTO tb_konsultasi (kode_gejala, jawaban) VALUES ('$_POST[kode_gejala]', 'Tidak')");
    elseif($act=='new')
        $db->query("TRUNCATE TABLE tb_konsultasi");
        
    header("location:index.php?m=konsultasi");
}

else if ($act=='pesan_hapus'){
    $db->query("DELETE FROM tb_pesan WHERE ID='$_GET[ID]'");
    header("location:index.php?m=laporan_pesan");
}