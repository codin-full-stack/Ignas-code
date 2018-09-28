<?php
/**
 * @param $data array -  array data from $_POST or other stuff
 * @param $filename string
 * 
 * Encode array to JSON and put into file
 */
function arrayToJsonFile($data, $filename) {    // įrašyti vartotoją į JSON
    $myJSON = json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE); 
    file_put_contents($filename, $myJSON);

}

/**
 * @param $filename string - direktorija iki JSON failo
 * 
 * return $array array
 */

function jsonFileToArray($filename) {     // ištraukti fartotojo info iš JSON
    $json = file_get_contents($filename);
    $array = json_decode($json, true);
    return $array;
}

/**
 * @param $directory string
 * 
 * Funcija iesko failu pagal direktorija pvz "myJSONfiles", o po to atvaizduoja gauta informacija
 */
function scanFiles($directory) {    //funkcija rasti failams direktorijoj

    $files = scandir($directory);
    $info2 = [
        'name'=>'Vardas: ',
        'surname'=>'Pavardė: ',
        'age'=>'Amžius: ',
        'email'=>'El.paštas: ',
        'city'=>'Miestas: ',
        'gender'=>'Lytis: ',
        'comentBox'=>'Komentaras: ',
        'newsletter'=>'Naujienlaiškis: ',
        'termsCheck'=> 'Sutinku su taisyklėmis: '
    ];
    
    foreach($files as $file){
        if(file_exists($directory . DIRECTORY_SEPARATOR . $file)) { // tikrinu ar failas egzistuoja
            $ext = pathinfo($file, PATHINFO_EXTENSION); 
            
            if($ext == 'json') {                                   //tikrinu failo tipa
                echo '<br>';
                $info = file_get_contents($directory . DIRECTORY_SEPARATOR . $file);
                $json = json_decode($info, true);
                
                unset($json['pass'], $json['pass_con']);
                
                foreach ($json as $key => $value) {             // pries tai decodinu failus ir gaunu informacija, kuria atvaizduoju
                    if (! empty($value)) {
                        echo $info2[$key] . ': ' .  $value . '<br>';
                    } else{
                        echo "Tokio vartotojo nėra. <br>";
                    }
                } 
            }
        }
        
    }
    
}
/**
 * @param $data array - from $_POST pagal email patikrint ar egzistuoja failas jei neegzistuoja tada echo neegzistuoja jei egzistuoja tada istraukiam infromacija is json failo ir tikrinam ar json slaptazodis lygus posto slaptazodziui ir tada prisijungiam
 * 
 * Ka veikia funkcija
 */
function login($data) {
    
    $filename = 'myJSONfiles' . DIRECTORY_SEPARATOR . $data['email'] . '.json';

    if(file_exists($filename)) {
        $data = jsonFileToArray($filename);
        $_POST['pass'] = md5($_POST['pass']);
        if ($_POST['pass'] == $data['pass']) {
            $_SESSION['email'] = $_POST['email'];
            header('Location: index.php');
        } 
    } else {
        echo "Neteisingas vartotojo vardas arba slaptažodis...";
    }
}
    
function hello() {
    if (isset($_SESSION['email'])) {
        $filename = 'myJSONfiles' . DIRECTORY_SEPARATOR . $_SESSION['email'] . '.json';
        $data = jsonFileToArray($filename);
        echo "Prisijungęs vartotojas - " . $data['name'] . ' ' . $data['surname']; ?>. Click here to <a href="logout.php" tite="Logout">Atsijungti</a>
        <?php
    } else {
        header ("Location: loginPage.php");
        echo "<h1>PRISIJUNKITE!</h1>";
    }
}
    
