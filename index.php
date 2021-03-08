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

$counttotal = count($data_lingkaran) + count($data_persegi) + count($data_segitiga);

$persentaselingkaran = count($data_lingkaran) / $counttotal * 100;
$persentasesegitiga = count($data_segitiga) / $counttotal * 100;
$persentasepersegi = count($data_persegi) / $counttotal * 100;
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

    <div class="container mt-5">
        <h4>Diagram Batang</h4>
        <table class="mt-4">
          <tr>
            <td valign="bottom">
              <div class="text-white text-center" style="width:40px; height:<?= count($data_lingkaran)*50 ?>px; background-color:red;"><?= count($data_lingkaran)?></div>
            </td>
            <td valign="bottom">
              <div class="text-white text-center" style="width:40px; height:<?= count($data_segitiga)*50 ?>px; background-color:green;"><?= count($data_segitiga)?></div>
            </td>
            <td valign="bottom">
              <div class="text-white text-center" style="width:40px; height:<?= count($data_persegi)*50 ?>px; background-color:blue;"><?= count($data_persegi)?></div>
            </td>
          </tr>
          <tr>
            <th>Lingkaran &nbsp;&nbsp;</th>
            <th>Segitiga &nbsp;&nbsp;</th>
            <th>Persegi</th>
          </tr>
        </table>

        <br><br>
        <h4>Persentase</h4>
        <div class="bg-light d-flex align-items-center" style="width:100%;">
          <div class="d-inline-block text-center" style="width:<?= $persentaselingkaran ?>%; background-color:red; color:white;"><?= round($persentaselingkaran) ?> %</div>
          <div class="d-inline-block text-center"  style="width:<?= $persentasesegitiga ?>%; background-color:green; color:white;"><?= round($persentasesegitiga) ?> %</div>
          <div class="d-inline-block text-center"  style="width:<?= $persentasepersegi ?>%; background-color:blue; color:white;"><?= round($persentasepersegi) ?> %</div>
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