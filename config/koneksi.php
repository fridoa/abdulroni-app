<?php 

$koneksi = mysqli_connect("localhost", "root","" ,"db_abdulroni_com");

if (!$koneksi) {
    die("Koneksi Database gagal: " . mysqli_connect_error());
}

?>