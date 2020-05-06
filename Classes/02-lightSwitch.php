<?php

// Create a class that represents a light switch


declare(strict_types=1);

class LightSwitch
{
    private $on = false;
    //setting 'on'as an initial state, so that the isOn and turnOn and turnOff functions have a value to respond to 

    public function isOn()
    {
        return $this->on;
    }
    //return a piece of information that already exists, i.e on = false (in its initial state)

    public function turnOn() 
    {
        $this->on = true;
    }
    //$this-> refers to an instance of the class, it is a function which takes the value of false, and makes it true, so that the light is now on

    public function turnOff() 
    {
        $this->on = false;
    }
    //to turn the lightswitch off the value now becomes false 

}


$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn();
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();
var_dump($lightSwitch->isOn()); // bool(false)