<?php

require '../function/control.php';

// Mangambil data dari array json dan mengubah menjadi variabel php
$data = get("segitiga.json");

date_default_timezone_set('Asia/Singapore');
$id = rand();
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$luas = $alas*$tinggi/2;
if (isset($_POST["segitiga-submit"])){
    $data[$id] = array(
        'id' => $id,
        'alas' => $alas,
        'tinggi' => $tinggi,
        'luas' => $luas,
        'created_at' => $date
    ); 

// Mengirim data dan Mengencode data menjadi json
send($data,'segitiga.json');

header("location:segitiga.php");
};
?>