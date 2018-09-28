<?php

// var_dump($_POST);

$array = [
    'ID1' => [
        'name'=>'Vardas: Ignas',
        'surname'=>'Pavardė: Jurevicius',
        'age'=>'Amžius: 30',
        'emailaddress'=>'El.paštas: ',
        'city'=>'Miestas: Vilnius',
        'gender'=>'Lytis: Vyr',
        'profession' => [
            'occu'=>'Programuotojas',
            'specialization'=>'PHP, HTML, CSS',
            'experience'=>'1 metai',
        ],
        'comentBox'=>'Komentaras: ',
        'newsletter'=>'Naujienlaiškis: ',
        'termsCheck'=> 'Sutinku su taisyklėmis: ' 
    ],
    'ID2' => [
        'name'=>'Vardas: Živilė',
        'surname'=>'Pavardė: Barboraite',
        'age'=>'Amžius: 20',
        'emailaddress'=>'El.paštas: ',
        'city'=>'Miestas: Utena',
        'gender'=>'Lytis: Mot',
        'comentBox'=>'Komentaras: ',
        'newsletter'=>'Naujienlaiškis: ',
        'termsCheck'=> 'Sutinku su taisyklėmis: ' 
    ],
    'ID3' => [
        'name'=>'Vardas: Julius',
        'surname'=>'Pavardė: Kepsnevicius',
        'age'=>'Amžius: 72',
        'emailaddress'=>'El.paštas: ',
        'city'=>'Miestas: Kresnėnai',
        'gender'=>'Lytis: Berniukas',
        'comentBox'=>'Komentaras: ',
        'newsletter'=>'Naujienlaiškis: ',
        'termsCheck'=> 'Sutinku su taisyklėmis: ' 
    ]
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
            foreach ($array as $key=>$item) {
                foreach ($item as $key2=>$item2) {
                    if(is_array($item2)) {
                        foreach ($item2 as $key3=>$item3) {
                            echo ($item3." "); 
                        }
                    } else {
                        echo $item2." ";
                    }
                }
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

    // if ($key == 'name' && $_POST['gender'] == "Vyras") {
    //     echo "Sveikas " . $_POST["name"] . "<br>";
    // } elseif ($key == 'name') {
    //     echo "Sveika " . $_POST["name"] . "<br>";
    // }

// }

// for ($num1 = $_POST['num1']; $num1 <=256000000; $num1=($num1*($num1-2))) {
//     echo "Skaičius yra: $num1 <br>";
// } //cia reiketu sukurt if salyga kad $num1-2 nebutu lygus 0 arba 1

// $num1 = $_POST['num1'];
// $num2 = $_Post['num2'];