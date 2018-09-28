<?php

$x=$_GET['nr1'];
$y=$_GET['nr2'];
$calculate=$_GET['Veiksmai'];

echo "Atsakymas: " . "$x $calculate $y" . " = ";

switch ($calculate) {
    case '+':
        echo round (($x+$y),3);
        break;
    case '-':
        echo round (($x-$y),3);
        break;
    case '*':
        echo round (($x*$y),3);
        break;
    case '/':
        echo round (($x/$y),3);
        break;
};
