<?php
    function wow($name) {
        echo "Hello $name";
    }

    $func = "wow";
    $func('Yahoo Baba');

    /* --- Anonymous function  ----- */
    $sayHello = function($name) {
        echo "Hello $name!";
    };

    $sayHello('Yahoo Baba');
?>