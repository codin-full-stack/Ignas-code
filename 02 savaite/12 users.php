<?php

if (!empty ($_POST)) {
    $info2 = [
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

    $fileName = $_POST['name'] . "_" . $_POST['surname'] . '.json';
        
    if (file_exists ($fileName)) {
        $info = file_get_contents($fileName);
        $json = json_decode($info, true);
        
        foreach ($json as $key => $value) {
            if (! empty($value)) {
                echo ($info2[$key]) . ': ' .  ($value) . '<br>' ;
            } 
        } 
    } else {
        echo "Tokio vartotojo nera";
    }
}
?>