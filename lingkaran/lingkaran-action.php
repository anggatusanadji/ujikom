<?php
require '../function/control.php';

// Mangambil data dari array json dan mengubah menjadi variabel php
$file = "lingkaran.json";

date_default_timezone_set('Asia/Singapore');
$id = rand_id();

if (isset($_POST["lingkaran-submit"])){
    $data = array(
        'id' => $id,
        'phi' => round(pi(), 2),
        'jari' => $_POST['jari'],
        'luas' => round(luas_lingkaran($_POST['jari']), 2),
        'created_at' => date('d-m-Y H:i:s')
    );

    $insert = insert_data($id, $data, $file);

    header("location:lingkaran.php");
};
?>