<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-1">
                <img class="img-responsive margin-b10" src="img/logo.png" width="100" height="100" alt="Logo UNMER" />
              </div>
             <img class="img-responsive margin-b10" src="img/LogoJatim.jpg" width="200" height="200" alt="Logo JATIM" />
            <hr class="hr1 margin-b-10" />
                          <div class="col-md-11">
              <h1 class="centered" class="judul-head" >Sistem Informasi Geografis Objek Wisata</h1>
                <p class="centered"><i class="fa fa-map-marker fa-fw"></i> Sistem Informasi yang memuat Pemetaan Objek Wisata di Kabupaten Trenggalek</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Status</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><i class="fa fa-home"></i> HALAMAN DEPAN</a></li>
            <li><a href="trenggalek.php"><i class="fa fa-home"></i> TRENGGALEK</a></li>
            <li><a href="pariwisata.php"><i class="fa fa-home"></i> PARIWISATA</a></li>
            <li><a href="data.php"><i class="fa fa-list-ul"></i> DATA Objek Wisata</a></li>
            <li><a href="Map.php"><i class="fa fa-map-marker"></i> PETA PERSEBARAN Objek Wisata</a></li>
            <li><a href="about.php" data-toggle="modal" data-target="#about"><i class="fa fa-user"></i> ABOUT ME</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>