<?php
$x =  10;

function test() {
    global $x; /* ----------Global variable----------*/
    echo "Variable x inside function : $x <br>";
}
test();

echo "Variable x outside function : $x";

/* ----------------------- */

/* $x = 5;
$y = 10;

function test() {
    global $x, $y;
    $x = $x + $y;
}

test();
echo $x; */
?>