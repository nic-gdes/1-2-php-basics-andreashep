<?php
//variable for the 4 data types
$string = "Hello World";
$boolean = true;
$integer = 129;
$float = 3.14;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <h1><?php
//echo single concatenated sentence
echo "I " . "love " . "PHP" . "!";
?></section>


        <section><?php
//create an array with >= 4 pieces of data
$my_array = array("Hello", "this", "is", "a", "cold", "world");
?></section>


        <section><?php
//create class of Car
class Car {
    //properties
    public $year;
    public $make;
    public $model;


   // Constructor function
   function __construct($year, $make, $model) {
    $this->year = $year;
    $this->make = $make;
    $this->model = $model;
}
}

// Create object of type Car
$my_Car = new Car(1968, "Ford", "Mustang");

// Echo the phrase using the object's properties
echo "I have a " . $my_Car->year . " " . $my_Car->make . " " . $my_Car->model;
?></section>
    


<section><h2> <?php

// Declare an integer variable named $integer
$integer = 17; 
// Check if the value is greater than or equal to 10
if ($integer >= 10) {
    // If true, print the following
    echo "The statement is true!";
} else {
    // If false, print the following
    echo "The statement is false!";
}

?></h2></section>

<section><h3><?php
 //Create standard loop using array from previous exercise
 $my_array = array("Hello", "this", "is", "a", "cold", "world");

// Standard for loop

for ($i = 0; $i < count($my_array); $i++) {
    echo $my_array[$i] . "<br />";
}

?></h3></section>


<section><h3><?php
 //Create foreach loops using array from previous exercise
 $my_array = array("Hello", "this", "is", "a", "cold", "world");


// Foreach loop

foreach ($my_array as $string) {
    echo $string . "<br />";
}

?></h3></section>
   
  </main>
</body>
</html>
