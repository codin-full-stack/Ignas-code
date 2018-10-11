<?php
include 'header.php';
?> 


<form action="post_new.php" method="GET" class="form">
    
    <div class="block">
        <label class="label" for="postname">Straipsnio pavadinimas*</label>
        <input class="input" placeholder="Pavadinimas" id="postname" maxlength="255" name="title" type="text" required/>
    </div>
    
    <div class="block">
        <label class="label" for="name">Vardas</label>
        <input class="input" placeholder="Vardas" type="text" id="name" name="name" value='<?php echo (!empty($user['first_name']) ? $user['first_name'] : ''); ?>' />
    </div>

    <div class="block">
        <label class="label" for="surname">Pavardė</label>
        <input class="input" placeholder="Pavardė" type="text" id="surname" name="surname" value='<?php echo (!empty($user['second_name']) ? $user['second_name'] : ''); ?>' />
    </div>

    <div class="block">
        <label class="label" for="article">Turinys</label>
        <textarea class="article_box" placeholder="Max. 3000 simbolių" type="text" id="article" name="contentBox" maxlength="3000"></textarea>
    </div>

    <div class="form__actions">
        <input class="sumbit" name="commit" type="sumbit" value="Sukurti naują įrašą" />
    </div> 

</form>

<?php
include 'footer.php';
?>