<?php

// Update sameName to return true if the associative arrays have the same name property and false if they have different names.

declare(strict_types=1);

function sameName (array $person1, array $person2) : bool {
    return $person1["name"] === $person2["name"];
};
//for those in the array, return values which are equal 

$a = [ "name" => "Alice", "age" => 52 ];
$b = [ "name" => "Bob", "age" => 34 ];
$c = [ "name" => "Charlie", "age" => 24 ];
$d = [ "name" => "Bob", "age" => 97 ];

var_dump(sameName($a, $b)); // bool(false)
var_dump(sameName($b, $c)); // bool(false)
var_dump(sameName($c, $d)); // bool(false)
var_dump(sameName($b, $d)); // bool(true)