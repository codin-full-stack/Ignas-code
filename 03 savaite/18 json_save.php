<?php
require_once 'functions.php';

$filename = __DIR__ . DIRECTORY_SEPARATOR . 'myJSONfiles' . DIRECTORY_SEPARATOR . ($_POST['email'] . '.json');


if ($_POST['pass'] == $_POST['pass_con']) {
    
    $_POST['pass'] = md5($_POST['pass']);
    unset($_POST['pass_con']);
    var_dump($_POST);
    
    arrayToJsonFile($_POST, $filename);
    echo "Sėkmingai užsiregistravote!";

} else {
    echo "Slaptažodžiai nesutampa!";
}        
?>