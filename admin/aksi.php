<?php
session_start();
include "../config/koneksi.php";

if (!isset($_SESSION['email'])) {
    header('Location: ../page.php?mod=login');
    exit();
}

if ($_GET['mod'] == 'tambahdata') {
    $judul      = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $isi_berita = mysqli_real_escape_string($koneksi, $_POST['berita']);
    $kategori   = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $iduser     = $_SESSION['iduser']; // Ambil iduser dari sesi

    $lokasi = "../asset/img/";
    $nama_gambar = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi . $nama_gambar);

    mysqli_query(
        $koneksi,
        "INSERT INTO tbl_berita (judul, isi_berita, kategori, gambar, iduser, tanggal)
         VALUES ('$judul', '$isi_berita', '$kategori', '$nama_gambar', '$iduser', NOW())"
    );

    header("location:page.php?mod=lihat");
} elseif ($_GET['mod'] == 'hapus') {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    mysqli_query(
        $koneksi,
        "DELETE FROM tbl_berita WHERE id='$id'"
    );

    header("location:page.php?mod=lihat");
} elseif ($_GET['mod'] == 'editdata') {
    $id         = mysqli_real_escape_string($koneksi, $_POST['id']);
    $judul      = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $isi_berita = mysqli_real_escape_string($koneksi, $_POST['berita']);
    $kategori   = mysqli_real_escape_string($koneksi, $_POST['kategori']);

    mysqli_query(
        $koneksi,
        "UPDATE tbl_berita SET
         judul='$judul',
         isi_berita='$isi_berita',
         kategori='$kategori'
         WHERE id='$id'"
    );

    header("location:page.php?mod=lihat");
}