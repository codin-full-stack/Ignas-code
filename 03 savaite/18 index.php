<?php
include 'header.php';
?>    
<div class="container">
    <?php
    if (!empty ($_POST)) {
        include('json_save.php');
    } else {
        include ('form.php');
    }
    ?>
</div>

<?php
include 'footer.php';
?>
