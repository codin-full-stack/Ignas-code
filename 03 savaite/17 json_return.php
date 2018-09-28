<?php
include 'header.php';
?>   

<div class="menu">
    <?php
        include('menu.php');
    ?>
</div>

<div class="allUsers">
    
    <?php
    require_once 'functions.php';
    $dir = __DIR__ . DIRECTORY_SEPARATOR . 'myJSONfiles';
    scanFiles($dir);
    ?>
    
<?php
include 'footer.php';
?>
