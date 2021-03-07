<?php
$file = "segitiga.json";
// Mendapatkan file json
$segitiga = file_get_contents($file);
// Mendecode segitiga.json
$data = json_decode($segitiga, true);
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
    <title>Segitiga</title>
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
            <a class="nav-item nav-link" href="../lingkaran/lingkaran.php">Lingkaran</a>
            <a class="nav-item nav-link active" href="segitiga.php">Segitiga</a>
            <a class="nav-item nav-link" href="../persegi/persegi.php">Persegi</a>
          </div>
        </div>
      </nav>
    </div>
    </div>

    <div class="container">
      <div class="btn-toolbar">
        <a class="btn btn-primary my-3" href="create.php"><i class="icon-plus"></i>Insert Data</a>
        <div class="btn-group"> </div>
      </div>

    <div class ="row">
      <div class="col-12">
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Alas</th>
            <th>Tinggi</th>
            <th>Luas Segitiga</th>
            <th>Tanggal</th>
          </tr> 
        </thead>
          
        <tbody>
          <?php $no = 0; $no++ ?>
          <?php foreach($data as $dt):  ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $dt['alas']; ?></td>
            <td><?php echo $dt['tinggi']; ?></td>
            <td><?php echo $dt['luas']; ?></td>
            <td><?php echo $dt['created_at']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
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