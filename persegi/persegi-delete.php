<?php
$file = "persegi.json";
$persegi = file_get_contents($file);
$data = json_decode($persegi, true);

unset($data[$_GET['id']]);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
// Menyimpan data ke dalam anggota.json
file_put_contents('persegi.json', $jsonfile);
header("location:persegi.php");
?>