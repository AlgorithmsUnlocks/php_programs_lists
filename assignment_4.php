<?php
/**
 * Question - 01
 */
function user_dfunction($a,$b){

    if(strlen($a) == strlen($b)){
        return 0;
    }
    return (strlen($a) < strlen($b))?-1:1;
}
$foods = ['apple','oranges','banana','fruits','among'];

usort($foods,"user_dfunction");

foreach($foods as $key=>$value){
    echo $key." => ".$value."\n ";
}

 
/**
 * Question - 02
 */
function conCateString($str1,$str2){
    return $str1.$str2;
 }
 $str1 = "Hypertextpreprocessor";
 $str2 = strrev($str1);
 echo conCateString($str1,$str2);
 

/**
 * Question - 03
 */
$names = array('First Alex', 'Peter', 'John', 'Ruman', 'Last Alex');
print_r($names);

array_shift($names);
array_pop($names);

$new_names = $names;
print_r($new_names);


/**
 * Question - 04
 */

 function checkString($string){

    if((preg_match("/^[a-zA-Z\s]+$/", $string)) && (strpos($string," "))){
        return "string has white space and letter\n";
    }else{
        echo "Ther has been mixed character";
    }
}
echo checkString("This is ruman ahmed form ottad batch");




/**
 * Question - 05
 */


$number = [1,2,4,6,8,92,7,55];
/**
 * First Way
 */

$max = $number[0];

for($i=1; $i < count($number); $i++){
    
    if($number[$i] > $max){
        $smax = $max;
        $max = $number[$i];
    }elseif($smax < $number[$i] && $smax < $max){
        $smax = $number[$i];
    }
}
echo $smax;

/**
 * Second Way
 */

sort($number);
// print_r($number);
$count = count($number);
// echo $count;
echo "\n";
for($i= $count; $i>=0; $i--){
    if($i == ($count-2)){
        echo $number[$i];
    }
}



?>