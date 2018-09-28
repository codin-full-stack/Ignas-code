<?php
session_start();
require_once 'functions.php';
// include('sessionCheck.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ignas Jurevicius</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <?php
            include('menu.php');
            include('login.php');
        ?>
    </div>
