<form method="POST" class="login" action="">
    
    El. paštas:<br>
    <input type="email" name="email"><br><br>
    Slaptažodis:<br>
    <input type="password" name="pass"><br><br>

    <input class="reg_but" type="submit" value="Prisijungti"> arba <a href="signIn.php">Užsiregistruoti</a><br><br>

    <?php
        
        if (!empty($_POST)){
            $email = $_POST['email'];
            $user = getUserData ($email);
            $pass = md5($_POST['pass']);
            
            if ($pass == $user['pass']){
                
                $_SESSION = [
                    'email'   => $user['email']
                ];
                
                header ('location: index.php');
                    
            } else {
                echo 'Neteisingas slaptazodis';
            }
        
        } else {
            echo 'Esate neprisijungę.';
        }  
    ?>

</form>





