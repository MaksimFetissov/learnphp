<?php
$num = 1;
if($num < 10){
    echo 'Is smaller than 10';
} else if($num > 10){
    echo 'Is bigger than 10';
} else {
    echo 'Is equal than 10';
}
$date = '25.10.2024';
$weekday = (int) date('w', strtotime($date));
var_dump($weekday);

if($weekday == 1) {
    echo 'Esmaspäev';
} else if($weekday == 2) {
    echo 'Teisipäev';
} else if($weekday == 3) {
    echo 'Kolmapäev';
} else if($weekday == 4) {
    echo 'Neljapäev';
} else if($weekday == 5 || $weekday == 6) {
    echo 'Pidupäev';
} else if($weekday == 0) {
    echo 'Pühapäev';
} else {
    echo 'Imelikpäev';
}

switch ($weekday) {
    case 1:
        echo 'Esmaspäev';
        break;
    case 2:
        echo 'Teisipäev';
        break;
    case 3:
        echo 'Kolmapäev';
        break;
    case 4:
        echo 'Neljapäev';
        break;
    case 5:
    case 6:
        echo 'Pidupäev';
        break;
    case 0:
        echo 'Pühapäev';
        break;
    default: 
        echo 'Imelikpäev';
}
