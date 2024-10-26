<?php

$bool = true && true;
$bool = false || false;
$bool = !true;
$bool = (true xor false);
//                              
$bool = true && false || true && false && !(false || true);
$bool = true && var_dump('hello');
var_dump($bool);
