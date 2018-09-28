<?php
session_start();
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
            if (isset($_SESSION["email"])) {
        ?>
                Sveiki <?php echo $_SESSION["email"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.</a>
        <?php
            } else { 
                echo "<h1>PRISIJUNKITE!</h1>";
            }
        ?>
    </div>
