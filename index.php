<?php
$time = microtime(true);
$i = 0;
while($time + 10 > microtime(true)){
    $i++;
}
var_dump($i);