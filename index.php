<?php
include 'header.php';
?> 

    <div class="title">
        <h1>Sveiki atvykę!</h1>
        <p id="hello"></p>
    </div> 

    <div class='xmas'>
        <h1 class='xmash1'>Iki Kalėdų liko:</h1>
        <h3 id="countdown"></h3>
    </div>

    <div class='empty'>  
    </div>

    <div class='buttons'>
        <button onclick="selectOne()">Nuspalvink</button>
        <button onclick="document.getElementById('hello').innerHTML = Date()">The time is?</button>
    </div>

<?php
include 'footer.php';
?>
