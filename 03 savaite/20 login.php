<form method="POST" class="login" action="" autocomplete="off">
    El. paštas:<br>
    <input type="email" name="email"><br><br>
    Slaptažodis:<br>
    <input type="password" name="pass"><br><br>

    <input type="hidden" name="login" value="1">

    <input class="reg_but" type="submit" value="Prisijungti"><br><br>

</form>

<?php
    if (!empty ($_POST) && (isset($_POST['login']) && $_POST['login'] == 1)) {
        login($_POST);
        hello();
    }
?>
