<?php

// var_dump($_POST);

// $num1 = $_POST['num1'];
// $num2 = $_Post['num2'];

$array = [
    'name'=>'Vardas: ',
    'surname'=>'Pavardė: ',
    'age'=>'Amžius: ',
    'emailaddress'=>'El.paštas: ',
    'city'=>'Miestas: ',
    'gender'=>'Lytis: ',
    'comentBox'=>'Komentaras: ',
    'newsletter'=>'Naujienlaiškis: ',
    'termsCheck'=> 'Sutinku su taisyklėmis: '
];

foreach ($_POST as $key=>$item) {
    var_dump($item);
    // var_dump($key);
    echo "$array[$key]" . "$item <br>";

    if ($key == 'name' && $_POST['gender'] == "Vyras") {
        echo "Sveikas " . $_POST["name"];
    } elseif ($key == 'name') {
        echo "Sveika " . $_POST["name"];
    }

}



// while ($num1 <= 5) {
//     echo "Skaičius yra: $num1 <br>";
//     $num1++;
// }

// for ($num1 = $_POST['num1']; $num1 <=256000000; $num1=($num1*($num1-2))) {
//     echo "Skaičius yra: $num1 <br>";
// } //cia reiketu sukurt if salyga kad $num1-2 nebutu lygus 0 arba 1

// do {
//     echo "Pirmas skaičius yra: $num1 <br>";
//     $num1++;
// } while ($num1 <= 5) 
    
?>