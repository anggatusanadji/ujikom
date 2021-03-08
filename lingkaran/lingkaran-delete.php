<?php
$file = "lingkaran.json";
$lingkaran = file_get_contents($file);
$data = json_decode($lingkaran, true);

unset($data[$_GET['id']]);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
// Menyimpan data ke dalam anggota.json
file_put_contents('lingkaran.json', $jsonfile);
header("location:lingkaran.php");
?>