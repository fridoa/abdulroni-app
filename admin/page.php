<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../page.php?mod=login');
    exit();
}

include "../access_control.php";

if (isset($_GET['mod'])) {
    $mod = $_GET['mod'];

    // Kontrol akses berdasarkan modul
    switch ($mod) {
        case 'home':
            include "home.php";
            break;
        case 'pengguna':
            // Hanya admin yang bisa mengakses modul pengguna
            checkAdminAccess();
            include "pengguna.php";
            break;
        case 'lihat':
            // Admin dan reporter bisa mengakses modul lihat
            if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'reporter') {
                include "lihatdata.php";
            } else {
                echo "Akses ditolak.";
            }
            break;
        case 'kelola':
            // Admin dan reporter bisa mengakses modul kelola
            if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'reporter') {
                include "keloladata.php";
            } else {
                echo "Akses ditolak.";
            }
            break;
        case 'logout':
            session_destroy();
            header('Location: ../page.php?mod=home');
            exit();
        case 'ubah':
            // Admin dan reporter bisa mengakses modul ubah
            if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'reporter') {
                include "editdata.php";
            } else {
                echo "Akses ditolak.";
            }
            break;
        default:
            echo "Halaman tidak ditemukan.";
            break;
    }
} else {
    echo "Halaman tidak ditemukan.";
}