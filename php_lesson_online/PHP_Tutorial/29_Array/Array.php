<?php
    /* ------------Array-------------- */
    $colors = array('red', 'yellow', 'blue', 'green');

    echo $colors[0]."<br>";

    $colors =['red', 'yellow', 'blue', 'green']; /* IInd way */

     /* -----can also use different data types-------- */

     //2.)
     echo "<pre>";
     print_r($colors);
     echo "</pre>";

     //3.)
     $colors[0] = "red"; /* ------------- Loop Method */
     for ($i = 0; $i  < 4; $i++) { 
        echo "<li>$i</li>";
     }

     echo "</ul>";
    
?>