<?php

    $json = file_get_contents('menu.json');
    $array = json_decode($json, true);
    $array = $array['menu']['items'];

    foreach ($array as $key => $value) {

        if (! empty($value)) {
            ?>
                <a href="<?php echo $value['id']; ?>" class="menu-link">
                    <?php
                        if (! empty ($value['label'])) {
                            echo $value ['label'];
                        } else {      
                            echo "empty lable";
                        }
                    ?>
                </a>
            <?php
        } 
    }           

?>