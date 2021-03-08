<?php
$file = "segitiga.json";
$segitiga = file_get_contents($file);
$data = json_decode($segitiga, true);

unset($data[$_GET['id']]);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
// Menyimpan data ke dalam anggota.json
file_put_contents('segitiga.json', $jsonfile);
header("location:segitiga.php");
?>