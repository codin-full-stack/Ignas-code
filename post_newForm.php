<?php
include 'header.php';
?> 


<form action="post_new.php" method="GET" class="form">
    
    <b>Įrašo pavadinimas:</b>
    <input type="text" name="title"><br><br>
    
    <b>Vartotojas</b><br>
    Vardas:<br>
    <input type="text" name="name" value='<?php echo (!empty($user['first_name']) ? $user['first_name'] : ''); ?>'><br>
    Pavardė:<br>
    <input type="text" name="surname" value='<?php echo (!empty($user['second_name']) ? $user['second_name'] : '') ;?>'><br><br>
    
    Įrašas:<br>
    <textarea class="subject" name="contentBox" placeholder="Max 999 simboliai..." style="height:200px; width:100%" maxlength="999"></textarea><br><br>

    <input type="submit" value="Sukurti įrašą" class="button">

</form>

<?php
include 'footer.php';
?>