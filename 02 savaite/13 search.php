<html>
<head>
    <meta charset="UTF-8">
    <title>Vartotojų paieška</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <?php
            include('menu.php');
        ?>
    </div>
    <form action="users.php" method="POST" class="searchBars">
        Vardas:<br>
        <input type="text" name="name" id="search" placeholder="Įveskite vardą..."><br><br>
        Pavardė:<br>
        <input type="text" name="surname" id="search" placeholder="Įveskite pavardę..."><br><br>
        <input id="submit" type="submit" value="Ieškoti">
    </form>
</body>
</html>
