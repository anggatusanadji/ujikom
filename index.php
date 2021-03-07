<?php
$file_lingkaran = "lingkaran/lingkaran.json";
$lingkaran = file_get_contents($file_lingkaran);
$data_lingkaran = json_decode($lingkaran, true);

$file_segitiga = "segitiga/segitiga.json";
$segitiga = file_get_contents($file_segitiga);
$data_segitiga = json_decode($segitiga, true);

$file_persegi = "persegi/persegi.json";
$persegi = file_get_contents($file_persegi);
$data_persegi = json_decode($persegi, true);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lingkaran</title>
  </head>
  <body>

<!-- Header -->
<div class="container-fluid bg-light">
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:10px 0px">
    <a class="navbar-brand" href="/">Bangun Ruang</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <!-- <a class="nav-item nav-link active" href="#">Home</a> -->
        <a class="nav-item nav-link" href="lingkaran/lingkaran.php">Lingkaran</a>
        <a class="nav-item nav-link" href="segitiga/segitiga.php">Segitiga</a>
        <a class="nav-item nav-link" href="persegi/persegi.php">Persegi</a>
      </div>
    </div>
  </nav>
</div>
</div>

    <div class="container">
      <div class ="row">
        <div class="col-2">
          <p>Data Lingkaran</p>
        </div>
        <div class="col-10">
          <div class="chart-lingkaran" style="width:<?= count($data_lingkaran) ?>0mm"><?= count($data_lingkaran) ?></div>
        </div>
      </div>
      <br>
      <div class ="row">
        <div class="col-2">
          <p>Data Segitiga</p>
        </div>
        <div class="col-10">
          <div class="chart-segitiga" style="width:<?= count($data_segitiga) ?>0mm;"><?= count($data_segitiga) ?></div>
        </div>        
      </div>
      <br>
      <div class ="row">
        <div class="col-2">
          <p>Data Persegi</p>
        </div>
        <div class="col-10">
          <div class="chart-persegi" style="width:<?= count($data_persegi) ?>0mm"><?= count($data_persegi) ?></div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready(function(){
        $('#dataTable').DataTable();
      })
    </script>
  </body>
</html>