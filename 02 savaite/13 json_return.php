<link rel="stylesheet" href="style.css">

<div class="allUsers">
    
    <?php
    require_once 'functions.php';
    $dir = __DIR__ . DIRECTORY_SEPARATOR . 'myJSONfiles';
    scanFiles($dir);
    ?>

</div>