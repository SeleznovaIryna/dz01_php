<?php
$page = @$_GET['page'];

if($page === '') $page = 'main_page';

if($page === 'main_page') {
    $pagefile = 'pages/main_page.php';
    $title = 'Main page';
}
elseif ($page === 'about_us') {
    $pagefile = 'pages/about_us.php';
    $title = 'About us';
}
elseif ($page === 'photo_gallery') {
    $pagefile = 'pages/photo_gallery.php';
    $title = 'Photo gallery';
}
else {
    $pagefile = 'pages/404.php';
    $title = ':(...';
}
$headerfile = 'templates/header.php';
include 'templates/default.php';
