<?php

// Write some code that outputs a cumulative total of the current line number for 1 to 50.

// e.g.

// 1
// 1 + 2
// 1 + 2 + 3
// 1 + 2 + 3 + 4
// etc.
// Example output:

// int(1)
// int(3)
// int(6)
// int(10)
// ...
// int(1275)

$total = 0;

for ($i = 0; $i <= 50; $i += 1) {
    var_dump($total += $i);
}