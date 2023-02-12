<?php

//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

// This is first way to do even and odd checking programms with function
function isEven(int $number){

    if($number % 2 == 0){
        echo "{$number} is an Even Number \n"; 
    }else{
        echo "{$number} is a Odd Number \n";
    }
}

// This is second way to do even and odd checking programms with function

// function isCheckEven(int $number){
//     if($number % 2 == 0){
//       return true;
//     }else{
//        return false;
//     }
// }

// $dicision = isCheckEven(4);
// if($dicision == 1){
//     echo "Even Number \n";
// }else{
//     echo "Odd Number \n";
// }


//2. 1+2+3...…….100  Write a loop to calculate the summation of the series

function sumOfHundred(){
    
    for($i=1,$sum = 0; $i <= 100; $i++){

        echo "The Process of Addition in step {$i}\n";

        echo "{$sum} + {$i} = ".($sum + $i). "\n"; 

        $sum += $i;
    
    }
    echo "The Sum of 1 to 100 Series is = ".$sum;
}



?>