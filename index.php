<?php

function hello(){
    var_dump('hello');
}

hello();


function sum($a, $b){
   return $a+$b;
}

$answer = sum(3,5);
$answer2 = sum(2,1);
echo $answer . ' is answer and answer2 is ' . $answer2;
// return will end function early
// function isBiggerThanTen($a){
//     if($a > 10){
//         return true;
//     }
//     return false;
    
// }

function isBiggerThanTen($a){
    return $a > 10;
}

var_dump(isBiggerThanTen(2));
var_dump(isBiggerThanTen(19));


function recursive($i){
    var_dump($i);
    if($i<10){
        $i++;
        recursive($i);
    }   
}

recursive(0);