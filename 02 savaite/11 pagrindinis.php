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
        ?>
    </div>
    <div class="container">
        <?php
        if (!empty ($_POST)) {
            include('json_save.php');
        } else {
            include ('form.php');
        }
        
        ?>
    </div>
</body>
</html>
<?php
