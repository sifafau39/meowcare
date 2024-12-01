<?php
include'functions.php';
//if(empty($_SESSION['login']))
    //header("location:login.php");
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
    <script type="text/javascript">
      $(function(){
        $("select:not(.default)").select2();
      })         
    </script>   
    <style type="text/css">
      .coeg{
        border-radius: 15px;
        border: 2px solid #000;
      }

    .hi{
background-image: linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)), url('kucing6.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
.dark{
  background-color: #000;
  color: #fff;
}
.refresh{
  background-color: #E9967A;
  color: #fff;
}
.refresh:hover{
  color: #fff;
  background-color: #E9967A;
}
.tambah{
  background-color: #E9967A;
  color: #fff;
}
.tambah:hover{
  color: #fff;
  background-color: #E9967A;
}
.edit{
  background-color: #E9967A;
  color: #fff;
}
.edit:hover{
  color: #fff;
  background-color: #2980b9;
}
.hapus{
  background-color: #E9967A;
  color: #555555;
}
.hapus:hover{
  color: #555555;
  background-color: #E9967A; 
}
.t{
  font-size: 17px;
 font-family: unset;
}
.latar{
        background-color: #E9967A;
    }
   .tambah{
        background-color:   #E9967A;
    }
    .tambah:hover{
        background-color:   #E9967A;
        color: #fff;
    }
     .edit{
        background-color: #E9967A;
    }
    .edit:hover{
        background-color:   #E9967A;
        color: #fff;
    }

      .logo {
     width: 60px;
     height: 60px;
     float: right;
   }

    </style>              

  <body>
    <nav class="navbar navbar-default navbar-static-top" style="background-color: #DEB887; color: #fff;">
      <div class="container">
        <a class="logo">
            <img src="logo.png" class="logo">
          </a>
      </head>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?" class="d"><b>Beranda</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php if($_SESSION['login']):?>
            <li><a href="?m=penyakit" class="t"><b>| Penyakit</b></a></li>
            <li><a href="?m=gejala" class="t"><b>| Gejala</b></a></li>
            <li><a href="?m=basispengetahuan" class="t"><b>| Pengetahuan</b></a></li>    
            <li><a href="?m=rule" class="t"><b>| Aturan</b></a></li>    
            <li><a href="?m=laporan" class="t"><b>| Laporan</b></a></li>
            <li><a href="?m=laporan_pesan" class="t"><b>| Pesan</b></a></li>
            <li><a href="?m=password" class="t"><b>| Password</b></a></li>
            <li><a href="aksi.php?act=logout" class="t"><b>| Logout</b></a></li>
            <?php else:?>
            <li><a href="?m=tentang" class="t"><b>| Tentang</b></a></li>
            <li><a href="?m=kucing" class="t"><b>| Kucing</b></a></li>
            <li><a href="?m=biodata" class="t"><b>| Konsultasi</b></a></li>
            <li><a href="?m=pesan" class="t"><b>| Bantuan</b></a></li>
            <li><a href="?m=login" class="t"><b>| Login Admin</b></a></li>
            <?php endif?>                     
          </ul>          
        </div>
      </div>
    </nav>
    <div>
    <div class="container">
    <?php
        if(!$_SESSION['login'] && in_array($mod, array('penyakit', 'gejala', 'basispengetahuan', 'rule', 'password')))
          $mod='home';

        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'home.php';
    ?>
  </div>
    </div>
    <footer class="footer" style="background-color: #DEB887; color: #fff;">
      <div class="container">
       <span class="pull-right">
        <p>Treat, Protect and Love your Cat ~ <i class="fa fa-heart pulse"></i> <b><a style="color: #fff" href="http://www.mycoding.net" target="_blank">Meow Care</a></b></p>
      </span>
      </div>
    </footer>
  </body>
</html>