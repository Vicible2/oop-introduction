<?php

declare(strict_types=1);


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//exercise requires for every page
require "./01.Classes/exercise_1_classes.php";
require "./02.Extending/exercise_2_extending.php";
require "./03.Private/exercise_3_private.php";
require "./04.Protected/exercise_4_protected.php";

function newExercise($x) {
    $block = "<hr/><strong>Exercise {$x} </strong><br>";
    echo $block;
}

newExercise(1);
    // $cola = new Beverage('black', 2);

    // //Default property setting, easier is using parameters see line 26 & 37
    // // $cola->color = 'black';
    // // $cola->price = '€2';

    // echo $cola->getInfo();
    // echo $cola->temperature;

newExercise(2);
    $duvel = new Beer('light', 3.5, 'Duvel', 8.5);

    echo $duvel->getAlcoholPercentage();
   // echo "{$duvel->alcoholPercentage} <br>" ;
    echo " {$duvel->color} <br>";
    echo $duvel->getInfo();

newExercise(3);

    echo $duvel->color;
    echo $duvel->beerInfo();
