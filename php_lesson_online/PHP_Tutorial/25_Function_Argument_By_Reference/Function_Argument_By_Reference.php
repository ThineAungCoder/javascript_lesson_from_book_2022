<?php
/* function argument By value */
function testing(&$string)
{
    $string.= 'and something extra.';
}

$str = 'This is a string,';
testing($str);
echo $str;

/*function argument By reference */
function first($num) {
    $num += 5;
}

function second(&$num) {
    $num += 6;
}

$number = 10;
first($number);
echo "Original value is $number<br />";

second($number);
echo "Original Value is $number<br />";

?>
