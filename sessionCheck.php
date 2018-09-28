<?php


if (isset ($_SESSION['email'])) {
    $user = getUserData ($_SESSION['email']);
    echo '<div class="hello">';
    echo 'Sveiki atvykę ' . $user['first_name'] . ' ' . $user['second_name']; ?>. Click here to <a href="logout.php" tite="Logout">Atsijungti</a><?php
    echo '</div>';
    // header ('Location: index.php');
} else {
    echo "Prisijunkite!";
    // header ("Location: loginPage.php");
}


?>