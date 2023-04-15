<?php
$view = $_GET['page'] ?? 'home.php';
$input = $_POST ?? null;

require 'templates/app.php';
if ($view === 'blogs.php') {

}
?>