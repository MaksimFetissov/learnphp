<?php

$array = ['apple', 'pear', 'cherry'];

$answer = implode(';',$array);

$array = [
    'hello' => 'world',
    1,
    2,
    4,
    'something' => 'else',
    10 => 5,
    6,
    7,
];
var_dump($array['something']);
var_dump($array[2]);
$array = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
var_dump($array[1][2]);
$array = [[[1]]];
var_dump($array[0][0][0]);
$array = [[[[1]]]];
var_dump($array[0][0][0][0]);