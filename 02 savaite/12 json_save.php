<?php

$filename = $_POST['name'] . "_" . $_POST['surname'] . '.json';
$myJSON = json_encode($_POST, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE); 
file_put_contents(urlencode($filename), $myJSON);

$json = file_get_contents(urlencode($filename));
$array = json_decode($json, true);
foreach ($array as $key => $value) {
    if (! empty($value)) {
        echo $value . "<br>";
    } 
} 
         
?>