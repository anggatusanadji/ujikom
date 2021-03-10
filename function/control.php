<?php

function get($file){
// Mangambil data dari array json dan mengubah menjadi variabel php
$getdata = file_get_contents($file);
return json_decode($getdata, true);
}

// function untuk membuat id random
function rand_id(){
    $id = rand();
    return $id;
}

function insert_data($id, array $data, $file){;
    $set_data = get($file);
    $set_data[$id] = $data;
    return send($file, $set_data);
}

// function untuk menghitung luas segitiga
function luas_segitiga($alas, $tinggi){
    return $alas * $tinggi / 2;
}
// function untuk menghitung luas lingkaran
function luas_lingkaran($jari){
    return pi()*$jari*$jari;
}
// function untuk menghitung luas persegi
function luas_persegi($sisi){
    return $sisi * $sisi;
}

function send($file, $data) {
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    // Menyimpan data ke dalam file.json
    return file_put_contents($file, $jsonfile);
}
