<?php

date_default_timezone_set('Asia/Jakarta');

$host       = "localhost";
$user       = "root";
$password   = "";
$db         = "pos-native";

$koneksi = mysqli_connect($host, $user, $password, $db); //koneksi ke database

// Cek koneksi
// if (mysqli_connect_errno()){
//     echo "Gagal koneksi ke Database";
//     exit();
// } else {
//     echo "Berhasil koneksi ke Database";
// }

$url_utama = "http://localhost/pos-native/";

?>