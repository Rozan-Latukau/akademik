<?php
$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db = "perpustakaan";

$koneksi = mysqli_connect($host, $user, $pass, $db) ;
if (!$koneksi) { //cek koneksi
    die( "T idak bisa terkoneksi ke database");
$nim = "";
$nama = "";
$matkul = "";
$fakultas = "";
$sukses = "";
$error = "";

?>