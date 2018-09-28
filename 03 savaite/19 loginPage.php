<?php
include 'header.php';
?>   

    <form method="POST" class="login" action="">
    
    El. paštas:<br>
    <input type="email" name="email"><br><br>
    Slaptažodis:<br>
    <input type="password" name="pass"><br><br>

    <input class="reg_but" type="submit" value="Prisijungti"><br><br>

    <?php
        if (!empty ($_POST)) {    
            login($_POST);
            hello();
        }
    ?>

    </form>

<?php
include 'footer.php';
?>