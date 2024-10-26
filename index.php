<?php

$array = ['apple', 'pear', 'cherry'];

foreach($array as $value) {
    var_dump($value);
}

$array = [
    'first' => 'apple',
    'second' => 'pear',
    'third' => 'cherry',
];


foreach($array as $key=>$value) {
    var_dump($key, $value);
}

foreach($array as &$value) { // pointer v pass-by-reference
    $value = 'something else';
    var_dump($value);
}
var_dump($array);