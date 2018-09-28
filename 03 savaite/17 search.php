<?php
include 'header.php';
?> 

    <form action="users.php" method="POST" class="searchBars">
        Vardas:<br>
        <input type="text" name="name" id="search" placeholder="Įveskite vardą..."><br><br>
        Pavardė:<br>
        <input type="text" name="surname" id="search" placeholder="Įveskite pavardę..."><br><br>
        <input id="submit" type="submit" value="Ieškoti">
    </form>

<?php
include 'footer.php';
?>

