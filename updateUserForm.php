<?php
include 'header.php';
?> 

<form action="updateUser.php" method="POST" class="form">
        
    Vardas:<br>
    <input type="text" name="name" value='<?php echo (!empty($user['first_name']) ? $user['first_name'] : ''); ?>'><br><br>
    Pavardė:<br>
    <input type="text" name="surname" value='<?php echo (!empty($user['second_name']) ? $user['second_name'] : '') ;?>'><br><br>
    Amžius:<br>
    <input type="text" name="age" value='<?php echo (!empty($user['age']) ? $user['age'] : '') ;?>'><br><br>
    Elektroninis paštas:<br>
    <input type="email" name="email" value='<?php echo (!empty($user['email']) ? $user['email'] : '') ;?>'><br><br>

    Miestas:<br>
    <select name="city" class="chooseCity" value='<?php echo (!empty($user['city']) ? $user['city'] : '') ;?>' >
        <?php
            $array = [
                'vln'=>'Vilnius',
                'kns'=> 'Kaunas',
                'klp'=>'Klaipėda',  
                'siau'=>'Šiauliai',
                'pnv'=>'Panevėžys',
                'mare'=>'Marijampolė',
                'aly'=>'Alytus',
                'Mzk'=>'Mažeikiai',
                'tls'=>'Telšiai'
            ];
        ?>    
        <?php foreach ($array as $key => $item) { ?>
            <option value="<?php echo $item; ?>">
                <?php echo $item; ?>
            </option> 
        <?php } ?>
    </select>
    <br><br>

    Lytis:<br>
    <input type="radio" name="gender" value='<?php echo (!empty($user['gender']) ? $user['gender'] : '') ;?>'> Vyras<br>
    <input type="radio" name="gender" value='<?php echo (!empty($user['gender']) ? $user['gender'] : '') ;?>'> Moteris<br>
    <input type="radio" name="gender" value='<?php echo (!empty($user['gender']) ? $user['gender'] : '') ;?>'> Kita<br><br>

    Komentaras:<br>
    <textarea class="subject" name="comentBox" placeholder="Papildomi komentarai..." style="height:200px; width:100%" maxlength="50" value='<?php echo (!empty($user['comment']) ? $user['comment'] : '') ;?>'></textarea><br><br>

    

    <input type="checkbox" name="newsletter" value="Naujienlaiškis"> Prenumeruoti naujienlaiškį<br><br>

    <input type="submit" value="Pakeisti vartotojo informaciją" class="button">
    
</form>

<form action="changePass.php" method="POST" class="form">

    Senas Slaptažodis:<br>
    <input type="password" placeholder="Slaptažodis" name="pass" require><br><br>

    Naujas Slaptažodis:<br>
    <input type="password" placeholder="Slaptažodis" name="new_pass" ><br><br>
    
    Pakartokite naują slaptažodį:<br>
    <input type="password" placeholder="Pakartokite slaptažodį"  name="pass_con" ><br><br>  
    
    <!-- reikia uzkoduoti slaptazodi su md5 hash -->

    <input type="submit" value="Pakeisti slaptažodį" class="button">

</form>

<?php
include 'footer.php';
?>