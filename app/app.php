<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Car.php';

  $app= new Silex\Application();
  $app->get('/', function(){

  });
  return $app;
 ?>
