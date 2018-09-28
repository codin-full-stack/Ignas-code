<?php

$json = file_get_contents('menu.json');
$array = json_decode($json, true);
$array = $array['menu']['items'];

foreach ($array as $key => $value) {
    var_dump($value);
    if (! empty($value)) {
        ?>
            <a href="<?php echo $value['id']; ?>">
                <?php
                    if (! empty ($value['label'])) {
                        echo $value ['label'];
                    } else {      
                        echo "empty field";
                    }
                ?>
            </a>
        <?php
    } 
}           
?>
    

<!-- var_dump($array);

foreach ($array as $key => $value) {
    var_dump($value);
    foreach ($value as $key2 => $value2) {        
        if(is_array($value2)) {
            foreach ($value2 as $key3 => $value3) {
                if (is_array($value3)) {
                    foreach ($value3 as $key4 => $value4) {                       
                        if (! empty($value4)) {
                            echo $key4 . " " . $value4 . "<br>";
                        }
                    }
                }
            }
        }
    }
}    -->
  

<!-- foreach ($array as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if (! is_array($value2)) {
            foreach ($value2 as $key3 => $value3) {
                $value = json_decode($value, true);
                echo $value3;
            }
        } else {
            echo $value2;
        }
    }
} -->