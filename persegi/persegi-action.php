<?php
require '../function/control.php';

// Mangambil data dari array json dan mengubah menjadi variabel php
$file = "persegi.json";

date_default_timezone_set('Asia/Singapore');
$id = rand_id();

if (isset($_POST["persegi-submit"])){
    $data = array(
        'id' => $id,
        'sisi' => $_POST['sisi'],
        'luas' => luas_persegi($_POST['sisi']),
        'created_at' => date('d-m-Y H:i:s')
    );

    // Mengirim data dan Mengencode data menjadi json
$insert = insert_data($id, $data, $file);

header("location:persegi.php");
};
?>