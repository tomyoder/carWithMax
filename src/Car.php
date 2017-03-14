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
    return $this->color;
  }
  $porsche = new Car("porsche", "911", "1984", 15000 ,450000, "https://s-media-cache-ak0.pinimg.com/236x/6e/b6/c9/6eb6c937cd248316e42b0a6de982b09a.jpg");
  $ford = new Car("ford", "mustang", "1965", 10000, 50000, "https://s-media-cache-ak0.pinimg.com/originals/b7/6f/4f/b76f4fdbbe53b4e045f83541cd6b115e.jpg");
  $chevy = new Car("chevy", "camaro", "1972", 78000, 200000, "http://pictures.dealer.com/b/brownsperformancemotorcars/0240/b6a4083d0a0d02b700ede19eb929031f.jpg");
}
$cars = array($porsche, $ford, $chevy);

$cars_matching_search = array();
function worthBuying($max_price){
  return $this->price < $max_price;
}

foreach ($cars as $car) {
  if ($car->worthBuying($GET_["price"])){
    array_push($cars_matching_search, $car);
  }
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Your Car Dealership's Homepage</title>
 </head>
 <body>
     <h1>Your Car Dealership</h1>
     <ul>
         <?php
             foreach ($cars_matching_search as $car) {
                 echo "<li> $car->make_model </li>";
                 echo "<ul>";
                     echo "<li> $$car->price </li>";
                     echo "<li> Miles: $car->miles </li>";
                 echo "</ul>";
             }
         ?>
     </ul>
 </body>
 </html>
