<?php 
class Shape {
    public $width, $height;
    public function construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}
class Triangle extends Shape {
    public function construct($width, $height) {
        parent::construct($width, $height);
    }
    public function area($shape){
        echo "L'area d'aquest triangle es de " . 
        ($this->height * $this->width) / 2 . "<br/>";
    }
}
class Rectangle extends Shape {
    public function construct($width, $height) {
        parent::construct($width, $height);
    }
    public function area($shape) {
        echo "L'area d'aquest rectangle es de " . 
        ($this->height * $this->width);
    }
}
$triangle1 = new Triangle;
$triangle1->construct(4, 6);
$triangle1->area($triangle1);
$rectangle1 = new Rectangle;
$rectangle1->construct(7,5);
$rectangle1->area($rectangle1);
?>