<?php

function get($path){
// Mangambil data dari array json dan mengubah menjadi variabel php
$getdata = file_get_contents($path);
return json_decode($getdata, true);
}

function send($data,$path) {
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    // Menyimpan data ke dalam anggota.json
    file_put_contents($path, $jsonfile);
}
