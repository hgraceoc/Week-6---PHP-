<?php

// Create a function, joinWords, that takes two strings as arguments. The function should return the two strings joined together with a space in between.


declare(strict_types=1);

function joinWords(string $firstWord, string $secondWord) : string {
    return $firstWord . " " . $secondWord;
};

var_dump(joinWords("fish", "sticks")); // string(11) "fish sticks"
var_dump(joinWords("hello", "world")); // string(11) "hello world"

