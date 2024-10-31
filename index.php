<?php

class Box {

    use Colorful;

    public $length;
    private $width;
    protected $height;

    public function __construct($length, $width, $height) {
        $this->length = $length;
        $this->height = $height;
        $this->width = $width;
    }

    public function volume(){
        return $this->length * $this->width * $this->height;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setWidth($width){
        if($width<0){
            $this->width = 0;
        } else {
            $this->width = $width;
        }
    }

    function __destruct() {
        echo "Destroying " . static::class . "\n";
    }
}

class MetalBox extends Box {
    public $weightPerUnit;

    public function changeValue(){
        $this->height = 10;
    }

    public function totalWeight(){
        return $this->weightPerUnit * $this->volume();
    }

    public function __toString()
    {
        return 'Im a metal box!';
    }

    public function __invoke()
    {
        echo 'Im a function now';
    }
}

trait Colorful {
    private $color;
    
    public function setColor($red, $green, $blue){
        if($red<0 || $red>255){
            $red = 0;
        }
        if($green<0 || $green>255){
            $green = 0;
        }
        if($blue<0 || $blue>255){
            $blue = 0;
        }
        $this->color = '#' . 
            str_pad(dechex($red), 2, '0', STR_PAD_LEFT) .
            str_pad(dechex($green), 2, '0', STR_PAD_LEFT) .
            str_pad(dechex($blue), 2, '0', STR_PAD_LEFT);
    }

    public function getColor(){
        return $this->color;
    }
}

function makeBox(){
    $box = new Box(1,2,3);
}

makeBox();


$box1 = new Box(4, 5, 6);
$box1->length = -10;
$box1->setColor(255,0,0);

var_dump($box1);
var_dump($box1->volume());
$box1 = 1;
unset($box1);
$box2 = new Box(7, 8, 9);

var_dump($box2);
var_dump($box2->volume());

$metalBox1 = new MetalBox(1, 2, 3);
$metalBox1->weightPerUnit = 3;
$metalBox1->changeValue();
var_dump($metalBox1);
var_dump($metalBox1->volume());
var_dump($metalBox1->totalWeight());

echo $metalBox1;

$metalBox1();