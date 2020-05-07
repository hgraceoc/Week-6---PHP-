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
    default: echo "Echium";
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



//CLASSES

class Person 
{
    private $firstName;
    private $lastName;
    private $legs =2; //sets a default value
    //set properties to private as a default

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $first;
        $this->lastName = $last;
    }

    public function getFullName() : string
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function setLastName(string $name)
    {
        $this->lastName = $name;
        return $this;
    }
}

$hannah = new Person("Hannah", "Crya");

$hannah->setLastName("Cryer");

echo $hannah->getFullName();

//GETTERS AND SETTERS
//setters read information that is already there and extract it, setters are used to create additional information, so therefore will require new properties to be declared 

class Car 
{
    private $make;
    private $numberPlate;
    private $mileage = 0;
    //set $mileage to zero as default inital value 

    public function __construct(string $make, string $numberPlate)
    {
        $this->make = $make;
        $this->numberPlate = $numberPlate;
    }
    //contsruct the class car, by combining the make and numberplate properties into a string 

    public function getNumberplate() : string
    {
        return $this->numberPlate;
    }
    //getter method which returns just the number plate for the instance in which the function is called

    public function getMake() : string
    {
        return $this->make;
    }

    public function addJourney(int $miles)
    {
        $this->mileage += $miles;
    }
    //add journey function, used to update the mileage property. Takes a parameter of miles (passed in as the function is called) and adds that to the current mileage property (which was previously declared) += will ensure a cumulative total  

    public function getMileage() : int
    {
        return $this->mileage;
    }
    //the get mileage property will read the updated mileage property declared at the beginning, which is updated by the add journey function each time it is used 
    
}

//STATIC

public static function {
    //a function that lives inside the person class and does is used within the people function, a method that belongs to a class rather than an instance that the class creates
}

private static $hiya {
    //static variable, belongs to the Person class, as supposed to a specifc person
}

function lastNames(array $people) {
    $lastNames = [];

    foreach ($people as $person) {
        $lastNames[] = $person->getLastName();
    }

    return $lastNames;

}

$result = Person::lastNames([$mark, $jack]);


//DATE TIME CLASS
$now = new DateTime();
var_dump($now);

$then = newDateTime("5th March 2020, 12:07:09");
var_dump($then->format("Y-m-d H:i:s"));

$interval = new DateInterval("P2Y4M5DT7H8M5S");

var_dump($now->sub($interval));




//NAME SPACES

//first file - post.php
<?php

class Post
{
    private $title;
    private $content:

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content; 
    }
}
//class Post defined within this file 


//second file - app.php
<?php

require_once "Post.php";
require 
include_once
include //when you use include, if the file cannot be found, the code still runs 

$post = new Post("Blah", "Blah blah blah");



namespace Slack;
//at the beginning of the file you are pulling

require_once "Post.php"
require_once "Slack/Post.php"

$post - new Post();
$post2 = new Slack\Post();
//directory\filename
//in the file in which you are calling it

use Slack\Post as UPost;

$post - new Post();
$post2 = new UPost();
//to use both files with the same name in the same file

//AUTOLOADING
spl_autoload_register(function ($classname) {

});

//COMPOSER
//file directory called composer
//composer init -n //terminal

//composer.json
{
    "require": {},
    "autoload": {
        "psr-4"{"App\\": "app/"}
    }
}

//in same level as composer, we need an app directory

//composer dump-autoload //terminal

//file in the same directory as vendor

//index.php
<?php

require_once __DIR__ . "/vendor/autoload.php";

namespace App\Slack;
class Post
{

}

//LIBRARIES

//PACKAGES
//.gitignore 
vendor/

composer require symfony/var-dumper //terminal

composer require nesbot/carbon //template


//OOP

//ENCAPSULATION

//mail.php
<?php

function mail($to, $from, $subject $message)
{

}

// mail("bob@bob.com, jim@jim.com, "Hey Bob", "How are you?");

// //using a function becomes quickly complicated and parameters become hard to track 

//second version 
class Mail 
{
    private $to = null;
    private $from = null;
    private $subject = null;
    private $message = null;
    private $cc = [];
    //inside the mail class, not changeable as not global 

    public function to($email) 
    {
        $this->to = $email;
        return $this;
    }

    public function from($email)
    {
        $this->from = $email;
        return $this;
    }

    public function mail()
    {
        //do stuff with parameters
    }
}

$mailer = new Mail();
$mailer->to("bob@bob.com")->from("jim@jim.com")->mail();
//chaining the properties that you want to use 



//VISIBILITY

//public properties, others can tweak 

//private properties, full control over the values that they can take - as they cannot be changed by others 




//bootstrap.php
require_once __DIR__ . "/vendor/autoload.php";

$app = new App\App();
//class called app in the namespace App

$app->start();
//calling the start method on app

mailingList.php 
uses localMailServer.php to actually send the mail 
//an object using another object


//types to ensure encapsulation 
public function send(LocalMailServer $mail)

public function __construct(array $subscribers)

public function from($email) : localMailServer
{
    $this->from = $email;
    return $this;
}

//POLYMORPHISM

//INTERFACE
//pass in different classes doing different things 
//Mailerinterface.php
<?php

namespace App;

interface MailerInterface
{
    public function mail() : void;
    public function to(string $subscriber) : MailerInterface;
}
//the classes decide how the thing works
//the interface sets conditions for how those classes are used


//in the class file
class LocalMailSever implements MailerInterface

public function send(MailerInterface $mail)