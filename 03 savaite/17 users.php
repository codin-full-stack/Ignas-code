<?php
include 'header.php';
?>   

<div class="users">
    <?php
    require_once 'functions.php';
    
    if (!empty ($_POST)) {
        $filename = __DIR__ . DIRECTORY_SEPARATOR . 'myJSONfiles' . DIRECTORY_SEPARATOR . urlencode($_POST['name'] . "_" . $_POST['surname'] . '.json');
        
        if (file_exists($filename)){
            $array = jsonFileToArray($filename);
            foreach ($array as $key => $value) {
                if (! empty($value)) {
                    echo $value . "<br>";
                } 
            }
        } else {
            echo "Tokio vartotojo nera";
        }
    }
    ?>

<?php
include 'footer.php';
?>