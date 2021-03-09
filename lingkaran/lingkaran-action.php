<?php
require '../function/control.php';

// Mangambil data dari array json dan mengubah menjadi variabel php
$data = get("lingkaran.json");

date_default_timezone_set('Asia/Singapore');
$id = rand();
$phi = 3.14;
$jari = $_POST['jari'];
$luas = $phi*($jari*$jari);
$date = date('d-m-Y H:i:s');
if (isset($_POST["lingkaran-submit"])){
    $data[$id] = array(
        'id' => $id,
        'phi' => $phi,
        'jari' => $jari,
        'luas' => $luas,
        'created_at' => $date
    );

    // Mengirim data dan Mengencode data menjadi json
    send($data,'lingkaran.json');

    header("location:lingkaran.php");
};
?>