<?php 

// Commission Calculator for HF Consultancy 

$tution_fee = 30000;
$commission = 0;

if($tution_fee >= 20000){
    $commission = (($tution_fee * 25) / 100);
    printf("Your need to pay : %d (Dolors) of 25 percentage commision", $commission);
}elseif($tution_fee < 20000 && $tution_fee >= 10000){
    $commission = (($tution_fee * 20) / 100);
    printf("Your need to pay : %d (Dolors) of 20 percentage commision", $commission);
}elseif($tution_fee < 10000 && $tution_fee >= 7000){
    $commission = (($tution_fee * 15) / 100);
    printf("Your need to pay : %d (Dolors) of 15 percentage commision", $commission);
}else{
    printf("Invalid, not applied for any commission!");
}

echo PHP_EOL;

// Using Ternary Operator 

$tution_fee = 8000;
$commission = 0;

$commission = ($tution_fee >= 20000) ? "Your need to pay 25 percentage commision = ".($tution_fee*25)/100 : (($tution_fee >= 10000 && $tution_fee < 20000) ? "Your need to pay 20 percentage commision = ".($tution_fee*20)/100 : (($tution_fee >= 7000 && $tution_fee <10000) ? "Your need to pay 15 percentage commision = ".($tution_fee*15)/100 : "Invalid"));

echo $commission;


?>