<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Car.php';

  $app= new Silex\Application();
  $app->get('/', function(){
    return "<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <title>Find a Car</title>
</head>
<body>
    <div class='container'>
        <h1>Find a Car!</h1>
        <form action='carform'>
            <div class='form-group'>
                <label for='price'>Enter Maximum Price:</label>
                <input id='price' name='price' class='form-control' type='number'>
            </div>
            <button type='submit' class='btn-success'>Submit</button>
        </form>
    </div>
</body>
</html>";
  });
  $app->get('/carform', function(){
    $porsche = new Car("porsche", "911", "1984", 15000 ,450000, "https://s-media-cache-ak0.pinimg.com/236x/6e/b6/c9/6eb6c937cd248316e42b0a6de982b09a.jpg");
    $ford = new Car("ford", "mustang", "1965", 10000, 50000, "https://s-media-cache-ak0.pinimg.com/originals/b7/6f/4f/b76f4fdbbe53b4e045f83541cd6b115e.jpg");
    $chevy = new Car("chevy", "camaro", "1972", 78000, 200000, "http://pictures.dealer.com/b/brownsperformancemotorcars/0240/b6a4083d0a0d02b700ede19eb929031f.jpg");

    $cars = array($porsche, $ford, $chevy);
    $cars_matching_search = array();

    foreach ($cars as $car) {
      if ($car->worthBuying($_GET["price"])) {
        array_push($cars_matching_search, $car);
      }
    }
    $output = "";
    foreach ($cars_matching_search as $car) {
    $output = $output . "<!DOCTYPE html>
    <html>
    <head>
        <title>Your Car Dealership's Homepage</title>
    </head>
    <body>
        <h1>Your Car Dealership</h1>
        <ul>

           <li>"  . $car->getMake() . "</li>
           <ul>
           <li>" . $car->getPrice() . "</li>
           <li> Miles:" . $car->getMileage() . "</li>
           <li><img src='" . $car->getColor() . "'></li>
           </ul>

        </ul>
    </body>
    </html>";
    }
    return $output;
  });
  return $app;
 ?>
