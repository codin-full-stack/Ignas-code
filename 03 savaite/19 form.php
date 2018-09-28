
<html>
<body>
    <form method="POST" class="form" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
            
        Vardas:<br>
        <input type="text" name="name"><br><br>
        Pavardė:<br>
        <input type="text" name="surname"><br><br>
        Amžius:<br>
        <input type="text" name="age"><br><br>
        Elektroninis paštas:<br>
        <input type="email" name="email"><br><br>
    
        Miestas:<br>
        <select name="city" class="chooseCity">
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
        <input type="radio" name="gender" value="Vyras"> Vyras<br>
        <input type="radio" name="gender" value="Moteris"> Moteris<br>
        <input type="radio" name="gender" value="Kita"> Kita<br><br>

        Komentaras:<br>
        <textarea class="subject" name="comentBox" placeholder="Papildomi komentarai..." style="height:200px" maxlength="50"></textarea><br><br>

        Slaptažodis:<br>
        <input type="password" placeholder="Slaptažodis" name="pass" required><br><br>

        Pakartokite slaptažodį:<br>
        <input type="password" placeholder="Pakartokite slaptažodį"  name="pass_con" required><br><br>  
        
        <!-- reikia uzkoduoti slaptazodi su md5 hash -->

        <input type="checkbox" name="newsletter" value="Naujienlaiškis"> Prenumeruoti naujienlaiškį<br><br>

        <input type="checkbox" name="termsCheck" value="Sutinku" id="agree" /> Perskaičiau ir SUTINKU su <a href="https://d2d0b2rxqzh1q5.cloudfront.net/sv/1.67/dir/9ca/image/9caa2faa03e9935cb75b7de3e6d40f73.jpg">taisyklėmis</a>
    
        <input type="submit" value="Pateikti" class="button">
        
    </form>
</body>
</html>