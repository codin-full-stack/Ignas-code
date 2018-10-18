<?php

// $sql = "INSERT INTO users (Vardas, Pavarde, Amžius, email, Miestas, Lytis, Komentaras, Slaptažodis, Prenumerata)
// VALUES ($_POST)";


// $filename = __DIR__ . DIRECTORY_SEPARATOR . 'myJSONfiles' . DIRECTORY_SEPARATOR . ($_POST['email'] . '.json');

if ($_POST['pass'] == $_POST['pass_con']) {
    $_POST['pass'] = md5($_POST['pass']);
    unset($_POST['pass_con']);
    
    // arrayToJsonFile($_POST, $filename);
    
    $sql = 'INSERT INTO users (first_name, second_name, age, email, city, gender, pass) VALUES ("' . $_POST['name'] . '","' . $_POST['surname'] . '",' . $_POST['age'] . ',"' . $_POST['email'] . '","' . $_POST['city'] . '","' . $_POST['gender'] . '","' . $_POST['pass'] . '")';
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Failed to connect to MySQL";
    }

} else {
    echo "Slaptažodžiai nesutampa!";
}   

mysqli_close($conn);
 ?>

<!-- //sukurti uzklausa i duombaze kad patikrintu ar neegzistuoja toks pat vartotojas turinti toki pat email, tuomet neleisti kurti tokio pacio vartotojo.
select email>user patikrint su = $_POST['email']. -->