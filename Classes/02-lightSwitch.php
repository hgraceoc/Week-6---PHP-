<?php

// Create a class that represents a light switch


declare(strict_types=1);

class LightSwitch
{
    private $on = false;

    public function isOn()
    {
        return $this->on;
    }

    public function turnOn() 
    {
        $this->on = true;
    }

    public function turnOff() 
    {
        $this->on = false;
    }

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