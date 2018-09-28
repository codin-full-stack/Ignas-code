<?php
include 'header.php';
?>    

    
    <form method="POST" class="login">
    El. paštas:<br>
    <input type="email" name="email"><br><br>
    Slaptažodis:<br>
    <input type="password" name="pass"><br><br>
    
    <input class="reg_but" type="submit" value="Prisijungti"><br><br>
    
    <?php
        require_once 'functions.php';
        
        if (!empty ($_POST)) {    
            login($_POST);
        }
       
        if (isset($_SESSION['email'])) {   
            header("Location:index.php");
        }
    ?>
    
    </form>

<?php
include 'footer.php';
?>
