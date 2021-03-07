<?php
$file = "lingkaran.json";
$lingkaran = file_get_contents($file);
$data = json_decode($lingkaran, true);

date_default_timezone_set('Asia/Singapore');
$id = rand();
$phi = 3.14;
$jari = $_POST['jari'];
$luas = $phi*($jari*$jari);
$date = date('d-m-Y h:i:s');
if (isset($_POST["lingkaran-submit"])){
    $data[] = array(
        'id' => $id,
        'phi' => $phi,
        'jari' => $jari,
        'luas' => $luas,
        'created_at' => $date
    );
    // Mengencode data menjadi json
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    // Menyimpan data ke dalam anggota.json
    file_put_contents('lingkaran.json', $jsonfile);
    header("location:lingkaran.php");
};
?>