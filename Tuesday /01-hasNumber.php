<?php

// Create a function hasNumber, that returns true if the given string contains a digit.

declare(strict_types=1);

function hasNumber(string $str) : bool {
    return preg_match("/[0-9]/", $str) === 1;
}

var_dump(hasNumber("blah")); // bool(false)
var_dump(hasNumber("bl3h")); // bool(true)
var_dump(hasNumber("bl3h5")); // bool(true)