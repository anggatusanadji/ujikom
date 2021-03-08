<?php
$file = "segitiga.json";
$segitiga = file_get_contents($file);
$data = json_decode($segitiga, true);

date_default_timezone_set('Asia/Singapore');
$id = rand();
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$luas = $alas*$tinggi/2;
$date = date('d-m-Y h:i:s');
if (isset($_POST["segitiga-submit"])){
    $data[$id] = array(
        'id' => $id,
        'alas' => $alas,
        'tinggi' => $tinggi,
        'luas' => $luas,
        'created_at' => $date
    );
    // Mengencode data menjadi json
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    // Menyimpan data ke dalam anggota.json
    file_put_contents('segitiga.json', $jsonfile);
    header("location:segitiga.php");
};
?>