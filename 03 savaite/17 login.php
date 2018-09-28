<?php
include 'header.php';
?>    

    
    <form method="POST" class="login">
    Vartotojo vardas:<br>
    <input type="text" name="userID"><br><br>
    Slaptažodis:<br>
    <input type="password" name="pass"><br><br>
    
    <input class="reg_but" type="submit" value="Prisijungti"><br><br>
    
    <?php
        // $_SESSION = [
        //     'userID'=>'Ignas',
        //     'psw'=>'codeacademy'
        // ];
        // var_dump($_SESSION);
        
        if (!empty ($_POST)) {      // patikrinu ar egzisuotja POST
            $_SESSION['userID'] = $_POST['userID'];
            $_SESSION['psw'] = $_POST['psw'];
        }

        if (isset($_SESSION['userID'])) {   
            header("Location:index.php");
        }
    ?>
    
    </form>

<?php
include 'footer.php';
?>
