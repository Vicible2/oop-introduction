<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.
TODO: Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: print the temperature on the screen.
TODO: USE TYPEHINTING EVERYWHERE!
*/

class Beverage {

    //properties
    var $color;
    var $price;
    var $temperature;

    //Construct
    //constructs create intial property values that are assigned when creating a new class instance
    function __construct()
    {
        $this->temperature = 'cold';
    }

}