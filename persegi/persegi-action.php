<?php
$file = "persegi.json";
$persegi = file_get_contents($file);
$data = json_decode($persegi, true);

date_default_timezone_set('Asia/Singapore');
$id = rand();
$sisi = $_POST['sisi'];
$luas = $sisi*$sisi;
$date = date('d-m-Y h:i:s');
if (isset($_POST["persegi-submit"])){
    $data[$id] = array(
        'id' => $id,
        'sisi' => $sisi,
        'luas' => $luas,
        'created_at' => $date
    );
    // Mengencode data menjadi json
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    // Menyimpan data ke dalam anggota.json
    file_put_contents('persegi.json', $jsonfile);
    header("location:persegi.php");
};
?>