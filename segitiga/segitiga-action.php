<?php

require '../function/control.php';
$file = "segitiga.json";

date_default_timezone_set('Asia/Singapore');
$id = rand_id();

if (isset($_POST["segitiga-submit"])){
    $data = array(
        'id' => $id,
        'alas' => $_POST['alas'],
        'tinggi' => $_POST['tinggi'],
        'luas' => luas_segitiga($_POST['alas'], $_POST['tinggi']),
        'created_at' => date('d-m-Y H:i:s')
    ); 
$insert = insert_data($id, $data, $file);
header("location:segitiga.php");
};
?>