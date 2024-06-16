<?php
$mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';

switch ($mod) {
    case 'home':
        include 'template/home.php';
        break;
    case 'otomotif':
        include 'template/otomotif.php';
        break;
    case 'lifestyle':
        include 'template/lifestyle.php';
        break;
    case 'education':
        include 'template/education.php';
        break;
    case 'technology':
        include 'template/technology.php';
        break;
    case 'sport':
        include 'template/sport.php';
        break;
    default:
        include 'template/home.php';
        break;
}
?>