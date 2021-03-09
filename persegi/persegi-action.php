<?php
require '../function/control.php';

// Mangambil data dari array json dan mengubah menjadi variabel php
$data = get("persegi.json");

date_default_timezone_set('Asia/Singapore');
$id = rand();
$sisi = $_POST['sisi'];
$luas = $sisi*$sisi;
$date = date('d-m-Y H:i:s');
if (isset($_POST["persegi-submit"])){
    $data[$id] = array(
        'id' => $id,
        'sisi' => $sisi,
        'luas' => $luas,
        'created_at' => $date
    );

    // Mengirim data dan Mengencode data menjadi json
    send($data,'persegi.json');

    header("location:persegi.php");
};
?>