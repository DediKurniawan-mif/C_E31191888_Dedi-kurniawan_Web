<?php
// The parent class has hello method that returns "beep".
class Car
{
    final public function hello()
    {
        return "beep";
    }
}

//The child class has hello method that returns "Halllo"
class SportsCar extends Car
{
    public function hello()
    {
        return "Hallo";
    }
}

//Create a new object
$sportsCarl = new SportsCar();

//Get the result of the hello method
echo $sportsCarl->hello();
