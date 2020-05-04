<?php

// Write some code that lists all multiples of 13 up to 1,000 using a for loop

// Example output:

// int(13)
// int(26)
// int(39)
// int(52)
// …
// int(988)

for ($i = 0; $i <= 1000; $i += 1) {
    if ($i % 13 == 0) {
        var_dump($i);
    }
}