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




//FUNCTIONS
function add($a, $b) {
    return $a + $b;
}

var_dump(add(1, 2));


$msg = "hello";
//global scope

function message($a) {
    $msg = "aloha"
//local scope $msg variable will be used within the function by default, rather than the globally scoped variable
    return $msg . $a;
}

var_dump(message("hbomb")); //"aloha hbomb" - locally scoped
var_dump($msg); // "hello" - globally scoped 

global $msg
//be default, scoped to function - use global keyword to use the globally assigned variable 

//anonomys functions
$message = function ($a) {
return "Hello " . $a;
};

var_dump(array_map($message, ["Adam", "Avi]"]));

$msg = "Hello ";

$message = function ($a) use($msg) {
    return $msg . $a;
};
//'use' keyword allows us to use global function within a function

declare(strict_types=1);

function oap ($assoc) : bool {
    return ($assoc["age"] > 65);
}
// return type predefined as a bool so will either return true or false. In this case, if the age of each person in the associative array is above 65, it will return true, and otherwise false  





//TYPES
//what sort of thing we want a function to be given 

declare(strict_types=1); // always first line after opening tag

function message (string $a) {
    return "Hello " . $a;
};

function message (float $a)
//floats include integers and decimals 
function add (float $a, float $b) : float { // : float defines the type that can be returned 
    return $a + $b;
};


function message (integer $a)
//will only process whole numbers 





//ARRAYS
$arr = [1, 2, 3 , 4, 5];

var_dump($arr[2]);

for ($i = 0; $i < count($arr); $i += 1);

//older notation, but still in use
$arr = array('fish', 'cow', 'wombat');
var_dump($arr[2]);


$arr ['fish', 'wombat']
$arr[] = "kangaroo"
//adds to the end of an array (pushes)

$assoc = [
    "name" => "Bob",
    "age" => 48, 
    "address" [
        "road" => "Road one",
    ]
];

//to push in a new value
$assoc["legs"] =2;

//associative array, works in the same way as an object literal 
var_dump($assoc["name"]);





//LOOPING OVER ARRAYS
foreach ($assoc as $value) {
    var_dump($value);
}
//bob, 48, road one 

foreach ($assoc as $key) {
    var_dump($value);
}
//name, age, address

foreach ($assoc as $key) {
    var_dump($key);
}

array_map()
array_reduce()
array_filter()