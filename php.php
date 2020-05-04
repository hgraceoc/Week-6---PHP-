<?php
//must start each php file with the above statement

echo 
echo "Hello, world!";
//part of php, not a function

var_dump(true);
//so that it can be recognised as a variable, rather than be converted to a number  

php hello.php
//to run file in the command line 


//VARIABLES
$fish = 7;
//all variables start with a $ 

var_dump(ceil($number1));
//rounds up

var_dump(floor($number1));
//rounds down

var_dump(mt_rand(1,10));
//random number between 1 and 10

$name = 'Ben';
//without double quotes, a string cannot be interpolated
$name = "Ben";
$middle = "Silly Billy";
$name = "Ben {$middle} Smith";
//double quotes allow for interpolation 

var_dump($firstname . $lastname);
var_dump(9 . 9); //99

var_dump(strtoupper($firstname));
(strtoupper) //to uppercase
(strtolower) //to lowercase
(trim) //get rid of whitespace
(substr) //gives you the substring 

$isMonday = true;
var_dump(!$isMonday);
var_dump($isMonday && $isCloudy);
var_dump($isMonday and $isCloudy);
//written and does the same thing, but occasionally wont work in the same way, so better to use the symbols
var_dump($isMonday || $isCloudy);
var_dump($isMonday or $isCloudy);

//falsy
false
0
" "
null 
[]

//CONDITIONALS
//whenever you use a variable, make sure you use a $
if ($x > 10) {

} else {

}

//else if statements 
if ($x > 10) {
    
} else if ($x > 5) {

}

//ternany 
$x = 10;

$y = $x > 10 ? 5 : 8;

var_dump($y);

switch ($x) {
    case 10: echo "Fish"; break;
    case 11: echo "Marigold"; break;
    deafult: echo "Echium";
}

//for loop
for ($i =0; $i < 10; $i += 1) {
    var_dump($i);
}

$total = 0;
$i = 0;

//while loop
while ($total < 100) {
    $i += 1;
    $total += $i;
}
var_dump($total);


$username = "mwales";
$i = 1;
$final = $username;

while (isInDB($final)) {
    $final = $username . $i;
    $i += 1;
}

//do while loop
do {
    $i += 1;
    $total += $i;
} while ($total < 100)
//do while loops will always run once, and then will only run again if the conditon is true
