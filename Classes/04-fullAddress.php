<?php

// Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.

// Hint: PHP has an implode() function, which is similar to join() in JS


declare(strict_types=1);

class Address 
{
    private $street;
    private $town;
    private $postcode;
    //setting initial properties 

    public function __construct(string $street, string $town, string $postcode)
    {
        $this->street = $street;
        $this->town = $town;
        $this->postcode = $postcode;
    }
    //constructing the class, by assigning the properties to reflect each instance of the class, with the key word $this

    public function setStreet(string $street) {
        //setting the street method, requires an parameter. It takes the pre defined $street variable, which can do be set to a new value with each argument that calls it 
        $this->street = $street;
        return $this;
        //this takes the current instance of street to be passed in when calling the method
    }

    public function setPostcode(string $postcode) {

        $this->postcode = $postcode;
        return $this;

    }

    public function setTown(string $town) {

        $this->town = $town;
        return $this;  

    }
    
    public function fullAddress() : string
    {
        return $this->street . ", " . $this->town . ", " . $this->postcode;
    }
    //the full address method takes each part of the adress and returns them as a string 

}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
var_dump($address->fullAddress()); // string(34) "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
// using chaining
$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

// logs the new full address neatly
var_dump($address->fullAddress()); // string(34) "12 Cantelope Way, SW5 8RQ, Swansea"