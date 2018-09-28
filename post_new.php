<?php
include 'header.php';


if (!empty($_GET)) {
    $title = $_GET['title'];
    $content = mysqli_real_escape_string($conn, $_GET['contentBox']); // padeda išsaugot tekstą į DB
    
    $sql = "INSERT INTO post (title, user_ID, content) VALUES ('" . $title . "', '" . $user['ID'] . "', '" . $content . "')";

    $query = mysqli_query($conn, $sql); // įkelia sql eilutę į DB

    if($query) {
        echo "Įrašas sukurtas sėkmingai";
    } else {
        echo 'DB klaida';
    }
    
} else {
    echo "ERROR! Įrašas nebuvo sukurtas.";
}

include 'footer.php';

?>