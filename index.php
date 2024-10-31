<?php

class Box {
    public static $count;
    public $length;
    public static function test(){
        var_dump(self::$count);
    }

    public function test2(){
        var_dump($this->length);
        var_dump(self::$count);
    }
}

$box1 = new Box();
// $box2 = new Box();
Box::$count = 1;
Box::$count = 2;
Box::test();
$box1->test2();
// var_dump($box1, $box2);
var_dump(Box::$count, Box::$count);