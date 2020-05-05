<?php

// Create a function, mi5, that returns true if the given string is 00 followed by a digit. Make sure it returns a boolean value:


function mi5(string $str) : bool {
    return preg_match("/^(00)\d/", $str) ===1;
} 


var_dump(mi5("007")); // bool(true)
var_dump(mi5("oo8")); // bool(false)
var_dump(mi5("003")); // bool(true)
var_dump(mi5("M")); // bool(false)