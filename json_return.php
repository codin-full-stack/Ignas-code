<?php
include 'header.php';
?>   

<div class="menu">
    <?php
        include('menu.php');
    ?>
</div>

<div class="allUsers">
    <h3>VARTOTOJŲ SĄRAŠAS</h3>
    <?php
    $dir = __DIR__ . DIRECTORY_SEPARATOR . 'myJSONfiles';
    echo '<br>';
    scanFiles($dir);
    echo '<br>';
    ?>
</div>
    
<?php
include 'footer.php';
?>
