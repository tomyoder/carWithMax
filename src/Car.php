<?php
  class Car{
    private $make;
    private $model;
    private $year;
    private $price;
    private $mileage;
    private $picture;

  function __construct($car_make, $car_model, $car_year, $car_price, $car_mileage, $car_picture){
    $this->make = $car_make;
    $this->model = $car_model;
    $this->year = $car_year;
    $this->price = $car_price;
    $this->mileage = $car_mileage;
    $this->picture = $car_picture;
  }
  function getMake(){
    return $this->make;
  }
  function getModel(){
    return $this->model;
  }
  function getYear(){
    return $this->year;
  }
  function getPrice(){
    return $this->price;
  }
  function getMileage(){
    return $this->mileage;
  }
  function getColor(){
    return $this->picture;
  }
  function worthBuying($max_price){
    return $this->price < $max_price;
  }

};




?>
