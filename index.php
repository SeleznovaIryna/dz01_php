<?php
$page = @$_GET['page'];

if($page === NULL) $page = 'Main page';

if($page === 'Main page') {
    $pagefile = 'pages/main_page.php';
    $title = 'Main page';
}
elseif ($page === 'About us') {
    $pagefile = 'pages/about_us.php';
    $title = 'About us';
}
if($page === 'Photo gallery') {
    $pagefile = 'pages/photo_gallery.php';
    $title = 'Photo gallery';
}
else {
    $pagefile = 'pages/404.php';
    $title = ':(...';
}
$headerfile = 'templates/header.php';
include 'templates/default.php';