<?php
// Periksa apakah file access_control.php telah disertakan sebelumnya
if (!function_exists('checkAccess')) {
    function checkAccess($role)
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== $role) {
            header('Location: ../index.php');
            exit();
        }
    }
}

// Periksa apakah file access_control.php telah disertakan sebelumnya
if (!function_exists('checkAdminAccess')) {
    function checkAdminAccess()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            header('Location: ../index.php');
            exit();
        }
    }
}

// Periksa apakah file access_control.php telah disertakan sebelumnya
if (!function_exists('checkReporterAccess')) {
    function checkReporterAccess()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'reporter') {
            header('Location: ../index.php');
            exit();
        }
    }
}

// Periksa apakah file access_control.php telah disertakan sebelumnya
if (!function_exists('checkUserAccess')) {
    function checkUserAccess()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
            header('Location: ../index.php');
            exit();
        }
    }
}