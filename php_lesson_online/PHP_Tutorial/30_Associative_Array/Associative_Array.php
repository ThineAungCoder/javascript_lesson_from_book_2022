<?php
$age = array(
    "bill" => 25,
    "steve" => 28,
    "elon" => 22
);

echo $age["bill"] . "<br>";
echo $age["steve"] . "<br>";
echo $age["elon"] . "<br>";

echo '<pre>';
print_r($age);
echo '</pre>';

echo '<pre>';
var_dump($age);
echo '</pre>';

// another way to define array

$age1 = [
    "bill" => "25",
    "steve" => 28,
    "elon" => 22
];

echo '<pre>';
print_r($age1);
echo '</pre>';

echo '<pre>';
var_dump($age1);
echo '</pre>';

//array with Numeric key

$age2 = array(
    100 => "25",
    10 => 28,
    13 => 22
);

echo '<pre>';
print_r($age2);
echo '</pre>';

// array with numeric and string key

$age3 = array (
    100 => "25",
    "bill" => 28,
    13 => 22
);

echo '<pre>';
var_dump($age3);
echo '</pre>';
?>