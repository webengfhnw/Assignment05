<?php

class BallClass
{

    public $color;
    public $size;

    public function __set($price, $value)
    {
        echo "Set '$price' to '$value'<br/>";
        $this->price = $value;
    }

}

$ball = new BallClass;
$ball->color = "rot";
$ball->size = "klein";

$ball->price = 10;

echo "Color: " . $ball->color . "<br/>";
echo "Size: " . $ball->size . "<br/>";
echo "Price: " . $ball->price . "<br/>";