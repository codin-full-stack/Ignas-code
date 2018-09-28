<?php
include 'header.php';

$sql = "UPDATE users SET first_name = '" . $_POST['name'] . "', second_name = '" . $_POST['surname'] . "', age = '" . $_POST['age'] . "', email = '" . $_POST['email'] . "', city = '" . $_POST['city'] . "', gender = '" . $_POST['gender'] . "', comment = '" . $_POST['comentBox'] . "' WHERE ID = '" . $user['ID'] . "'";

if ($conn->query($sql) === TRUE) {
    echo "Vartotojo informacija atnaujinta sėkmingai";
} else {
    echo "KLAIDA!..: " . $conn->error;
}

$conn->close();

include 'footer.php';
?>
                