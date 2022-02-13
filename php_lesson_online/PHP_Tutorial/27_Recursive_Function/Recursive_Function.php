<?php
/*-----Recursive Function------*/
function display($number) {
    if($number<=5) {
        echo "$number <br />";
        display($number+1);
    }
}

display(1);

/*  ------------functorial Number----------- */
function factorial($n)
{
    if ($n < 0) {
        return -1;
    }

    if ($n == 0) {
        return 1;
    }else {
        return ($n * factorial ($n -1));
    }
}

echo factorial(5);
?>