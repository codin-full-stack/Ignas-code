<?php
// $_POST = [
//     'Vardas' => 'Vardas',
// ];

var_dump ($_POST);

if (empty($_POST['Vardas'])){
    echo "NEĮVESTAS VARDAS";
    echo '<br>';
} else {
    echo 'Vardas: ' . $_POST['Vardas'];
    echo '<br>';
}

if (empty($_POST['Pavarde'])){
    echo "NEĮVESTA PAVARDE";
    echo '<br>';
} else {
    echo 'Pavarde: ' . $_POST['Pavarde'];
    echo '<br><br>';
}

// empty gali buti taikomas TIK VIENAM kintamajam

if (empty($_POST['Vardas']) && empty($_POST['Pavarde'])){
    echo  "Klaida! Neužpildyti laukai";
} else {
    echo "";
}

// function wrireMsg($fullname) {
//     echo"Labas "."$_Post('Vardas')"."$_POST('Pavarde')";
// }