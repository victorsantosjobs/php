<?php 

function myCalculator ($num01, $oper,$num02){

$num;

switch ($oper) {

    case "add":
    $sum = $num01 + $num02;
    break;
    case "sub":
    $sum = $num01 - $num02;
    break;
    defalt:
    $sum = "Há algum erro.";
    break;
    
}

return $sum;


}


$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];


echo "Value: ". myCalculator($num01, $oper,$num02);