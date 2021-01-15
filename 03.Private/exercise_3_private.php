<?php

declare(strict_types=1);

/* EXERCISE 3
TODO:Copy the code of excercise 2 to here and delete everything related to cola.
TODO:Make all properties private.
TODO:Make all the other prints work without error.
TODO:After fixing the errors. Change the color of Duvel to light instead of blond and
TODO:also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO:Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
TODO:Make sure that u use the variables and not just this text line.
TODO:Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/


class Beer extends Beverage {

    private $name;
    private $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $name, $alcoholPercentage, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage(){
        return "<br> The alcoholpercentage of Duvel averages around {$this->alcoholPercentage} %.<br>";
    }
    private function beerInfo(){
        return "Hi I'm {$this->name} and have an alcohol percentage of{$this->alcoholPercentage} and I have a {$this->color} color.";
    }
}

