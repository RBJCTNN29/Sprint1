<?php 
class Shape {
    public $width, $height;
    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}
class Triangle extends Shape {
    function area(){
        echo ($this->height * $this->width) / 2;
    }
}
?>