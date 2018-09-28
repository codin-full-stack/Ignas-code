<?php
require_once 'functions.php';

$filename = __DIR__ . DIRECTORY_SEPARATOR . 'myJSONfiles' . DIRECTORY_SEPARATOR . urlencode($_POST['name'] . "_" . $_POST['surname'] . '.json');

arrayToJsonFile($_POST, $filename);

$array = jsonFileToArray($filename);

foreach ($array as $key => $value) {
    if (! empty($value)) {
        echo $value . "<br>";
    } 
} 
         
?>