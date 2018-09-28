<?php

var_dump($_POST);

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

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Ignas Jurevicius</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="fields">
        

        <?php
        
        if (!empty ($_POST)) {
            foreach ($_POST as $key=>$item) {
                echo "$array[$key]" . "$item <br>";
                    if ($key == 'name' && $_POST['gender'] == "Vyras") {
                        echo "Sveikas " . $_POST["name"] . "<br>";
                    } elseif ($key == 'name') {
                        echo "Sveika " . $_POST["name"] . "<br>";
                    }
            }
        } else {
            include ('form.php');
        }
        ?>

    </div>

</body>
</html>
<?php

// foreach ($_POST as $key=>$item) {
//     // var_dump($item);
//     // var_dump($key);
//     echo "$array[$key]" . "$item <br>";

    if ($key == 'name' && $_POST['gender'] == "Vyras") {
        echo "Sveikas " . $_POST["name"] . "<br>";
    } elseif ($key == 'name') {
        echo "Sveika " . $_POST["name"] . "<br>";
    }

// }

// for ($num1 = $_POST['num1']; $num1 <=256000000; $num1=($num1*($num1-2))) {
//     echo "Skaičius yra: $num1 <br>";
// } //cia reiketu sukurt if salyga kad $num1-2 nebutu lygus 0 arba 1

// $num1 = $_POST['num1'];
// $num2 = $_Post['num2'];