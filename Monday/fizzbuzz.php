<?php

// write some code that will output the numbers 1 to 100 in the console
// unless the number is divisible by 3, in which case output "Fizz"
// or the number is divisible by 5, in which case output "Buzz"
// if the number is divisible by 3 and 5, output "FizzBuzz"
// The first lines of output should look like this:

// 1
// 2
// Fizz
// 4
// Buzz
// Fizz
// 7
// 8
// Fizz
// Buzz
// 11
// Fizz
// 13
// 14
// FizzBuzz
// 16

// for ($i = 1; $i <= 100; $i += 1) {
//     if (($i % 3 === 0) && ($i % 5 === 0)) {
//         var_dump("FizzBuzz");
//     } else if ($i % 3 === 0) {
//         var_dump("Fizz"); 
//     } else if ($i % 5 === 0) {
//         var_dump("Buzz");
//     } else {
//         var_dump($i);
//     }
// }

//Javascript version
// for (let i = 1; i <= 100; i+=1) {
//     let result = i%3 === 0 ? "Fizz" : "";
//     result += i%5 === 0 ? "Buzz" : "";
//     result += i%7 === 0 ? "Splat" : "";
//     result += i%11 === 0 ? "Boom" : "";
//     console.log(result !== "" ? result : i); 
// }

for ($i = 1; $i <= 100; $i += 1) {
    $result = i % 3 === 0 ? "Fizz" : " ";
    $result += i % 5 === 0 ? "Buzz" : " ";
    echo($result !== " " ? $result :$i);
}