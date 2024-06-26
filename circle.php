<?php

class Circle {
    public $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function getRadius() {
        return $this->radius;
    }
    
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    
    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
    
    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(10);
echo "Radius: " . $circle->getRadius() . "<br>";
echo "Area: " . $circle->getArea() . "<br>";
echo "Circumference: " . $circle->getCircumference() . "<br>";
