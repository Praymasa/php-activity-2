<?php

class Vehicle {
    public $brand;
    public $model;
    public $year;
    
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    
    public function displayDetails() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}


$vehicle = new Vehicle("Toyota", "Camry", 2022);
$vehicle->displayDetails();
