<?php

declare(strict_types=1);


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "../01.Classes/exercise_1_classes.php";

/* EXERCISE 2
TODO: Make class beer that extends from Beverage.
TODO:Create the properties name (string) and alcoholpercentage (float).
TODO:Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
TODO:Remember for now we will use properties and methods that can be accessed from everywhere.
TODO:Make a getAlcoholpercentage function which returns the alocoholpercentage.
TODO:Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO:Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO:print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
TODO:Make sure that each print is on a different line.
TODO:Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
!! USE TYPEHINTING EVERYWHERE!
*/


class Beer extends Beverage {

    function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $name, $alcoholPercentage, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    function getAlcoholPercentage(){
        return "<br> The alcoholpercentage of Duvel averages around {$this->alcoholPercentage} %.<br>";
    }
}

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);


echo $duvel->getAlcoholPercentage();
echo "{$duvel->alcoholPercentage} <br>" ;

echo " {$duvel->color} <br>";
echo $duvel->getInfo();
