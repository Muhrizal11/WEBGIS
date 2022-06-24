<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "dbpantai";

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, "dbpantai" ) or die("Tidak ada database yang dipilih!");
?>