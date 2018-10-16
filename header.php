<?php
include 'config.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <title>Ignas Jurevicius</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <div class="nav" name="topNav">
            
        <div class="nav_section">
            <a href="index.php">Titulinis</a>
        </div>

        <div class="nav_section">
            <a href="loginStyle.php">Prisijungimas</a>
        </div>

        <div class="nav_section">
            <a href="post_newForm.php">Naujas straipsnis</a>
        </div>

        <div class="nav_section">
            <a href="feed.php">Vitrina</a>
        </div>

        <div class="nav_section">
            <a href="sheet.php">Lentelė</a>
        </div>

        <div class="dropdown">
            <button onclick="dropdown()" class="dropbtn">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>

    </div>