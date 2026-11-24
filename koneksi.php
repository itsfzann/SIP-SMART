<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pembayaran_spp";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Mengatur charset
mysqli_set_charset($koneksi, "utf8");
?>