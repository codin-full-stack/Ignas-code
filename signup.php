<?php
include 'header.php';
?>

<div class="logmod">
    <div class="logmod__wrapper">
        <div class="logmod__container">
            <ul class="logmod__tabs">
                <li class="tab"><a href="loginstyle.php">Prisijungimas</a></li>
                <li class="tab-active"><a href="#">Registracija</a></li>
            </ul>
            <div class="logmod__tab-wrapper">
                <div class="logmod__tab tab-2">
                    <div class="logmod__form">

                    <?php
                    if ($_POST['pass'] == $_POST['pass_con']) {
                        $_POST['pass'] = md5($_POST['pass']);
                        unset($_POST['pass_con']);
                        
                        // arrayToJsonFile($_POST, $filename);
                        
                        $sql = 'INSERT INTO users (first_name, second_name, age, email, city, gender, pass) VALUES ("' . $_POST['name'] . '","' . $_POST['surname'] . '",' . $_POST['age'] . ',"' . $_POST['email'] . '","' . $_POST['city'] . '","' . $_POST['gender'] . '","' . $_POST['pass'] . '")';
                        
                        if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";
                        } else {
                            echo "Failed to connect to MySQL";
                        }

                    } else {
                        echo "Slaptažodžiai nesutampa!";
                    }   
                    ?>
                    
                        <form accept-charset="utf-8" action="" class="form" method="POST">
                            <div class="inputs">
                                <div class="block">
                                    <label class="label" for="email">Elektroninis paštas*</label>
                                    <input class="input" id="email" maxlength="255" name="email" placeholder="Email" type="email" size="50" required/>
                                </div>
                                <div class="block">
                                    <label class="label" for="pass">Slaptažodis*</label>
                                    <input class="input" maxlength="255" id="pass" name="pass" placeholder="Slaptažodis" type="password" size="50" required/>
                                </div>
                                <div class="block">
                                    <label class="label" for="rpt_pass">Pakartokite slaptažodį*</label>
                                    <input class="input" maxlength="255" placeholder="Pakartokite slaptažodį" id="rpt_pass" name="pass_con" type="password" size="50" required/>
                                </div>
                                <div class="block">
                                    <label class="label" for="name">Vardas*</label>
                                    <input class="input" placeholder="Vardas" type="text" id="name" name="name" required/>
                                </div>
                                <div class="block">
                                    <label class="label" for="last_name">Pavardė*</label>
                                    <input class="input" placeholder="Pavardė" type="text" id="last_name" name="surname" required/>
                                </div>
                                <div class="block">
                                    <label class="label" for="age">Gimimo metai</label>
                                    <input class="input" type="date" id="age" name="age"/>
                                </div>
                                <div class="block">
                                    <label class="label" for="city">Miestas</label>
                                    <select class="input" id="city" name="city" class="chooseCity"/>
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
                                </div>
                                <div class="block">
                                    <label class="label">Lytis</label>
                                    
                                    <input type="radio" id="male" name="gender" value="Vyras">
                                    <label class="radio-label" for="male">Vyras</label>

                                    <input type="radio" id="female" name="gender" value="Moteris">
                                    <label class="radio-label" for="female">Moteris</label>

                                    <input type="radio" id="other" name="gender" value="Kita"> 
                                    <label class="radio-label" for="other">Kita</label>
                        
                                </div>
                                <div class="block">
                                    <label class="check_news" for="news">Prenumeruoti naujienlaiškį</label>                                
                                    <input type="checkbox" id="news" name="newsletter" value="Naujienlaiškis">
                                </div>
                                <div class="block">
                                    <label class="check_rules" for="rules">Perskaičiau ir SUTINKU su&nbsp<a href="https://d2d0b2rxqzh1q5.cloudfront.net/sv/1.67/dir/9ca/image/9caa2faa03e9935cb75b7de3e6d40f73.jpg">taisyklėmis*</a></label>
                                    <input type="checkbox" id="rules" name="termsCheck" value="Sutinku" require />
                                </div> 
                            </div>
                            <div class="form__actions">
                                <input class="submit" name="commit" type="submit" value="Registruotis" />
                            </div> 
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>