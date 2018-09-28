<?php

var_dump($_POST);

// $x=$_POST["nr1"];

// eval ('$x = '.$_POST["nr1"].';');

// echo round($x,2);
// ?>

    



<?php

$num1 = $_POST['nr1'];
$num2 = $_POST['nr2'];
$calc = $_POST['Veiksmai'];

function calculate($n1,$calcu,$n2){

    // echo "$n1 <br /> $calcu <br />  $n2 <br /><br />";

    $rez = $n1 . $calcu . $n2 . "=";
    eval ('$rez.= round('.$n1.$calcu.$n2.', 2);');

    return $rez;
}     // funkcijos viduje galima rasyti TIK PARAMETRUS, isoreje KINTAMIEJI

echo "Atsakymas: " .calculate($num1,$calc,$num2);

?>

<!-- // switch($calcu){
//     //     case "Sudėti":
//     //         echo $n1+$n2; 
//     //         break;
//     //     case "Atimti":
//     //         echo $n1-$n2; 
//     //         break;
//     //     case "Sudauginti":
//     //         echo $n1*$n2; 
//     //         break;
//     //     case "Dalinti":
//     //         echo $n1/$n2; 
//     //         break;
// calculate($num1, $num2, $calc); -->

