<?php
 // Start the session
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="POST" class="login">
    Vartotojo vardas:<br>
    <input type="text" name="userID"><br><br>
    Slaptažodis:<br>
    <input type="password" name="psw"><br><br>
    
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

        if (! empty($_SESSION)) {   
            echo $_SESSION['userID'] . "<br>" . $_SESSION['psw'];
        } 
    ?>
    
    </form>
</body>
</html>
