<?php
include 'header.php';


$_POST['pass'] = md5($_POST['pass']);
if (!empty($_POST)) {
    if ($_POST['pass'] == $user['pass']) {
        if (!empty($_POST['new_pass'] && $_POST['pass_con'])) {
            if (($_POST['new_pass']) == ($_POST['pass_con'])) {
                $_POST['new_pass'] = md5($_POST['new_pass']);
                unset($_POST['pass_con']);                
                $sql = "UPDATE users SET pass = '" . $_POST['new_pass'] . "' WHERE ID = '" . $user['ID'] . "'";
                if ($conn->query($sql) === TRUE) {
                    echo "Slaptažodis pakeistas sėkmingai";
                } else {
                    echo "KLAIDA!..: " . $conn->error;
                }
                $conn->close();
                
            } else {
                echo 'Slaptažodžiai nesutampa';
            }
        } else {
            echo 'Įveskite naują slaptažodį';
        }
    } else {
        echo "Neteisingas senas slaptažodis";
    }
} else {
    echo 'Prisijunkite';
}


