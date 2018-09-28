<?php
include 'header.php';
?>   

<div class="users">
    <?php
    require_once 'functions.php';
    
    if (!empty ($_POST)) {
        $filename = __DIR__ . DIRECTORY_SEPARATOR . 'myJSONfiles' . DIRECTORY_SEPARATOR . ($_POST['email'] .  '.json');
      
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