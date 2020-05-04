<?php

// Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3

// Example output:

// int(6)
// int(12)
// int(18)
// int(24)
// …
// int(48)

for ($i = 0; $i < 50; $i += 1) {
    if (($i % 2 == 0) && ($i % 3 == 0)) {
        var_dump($i);
    }
}