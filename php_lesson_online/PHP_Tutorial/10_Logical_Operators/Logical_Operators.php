<?php
    $age = 20;

    /* Logical And Operator */
    if ($age >= 18 && $age <= 21) {
        echo "You are eligibal.<br>";
    } 

    echo "Here is other statement";

     /* Logical And Operator */
     if ($age >= 18 and $age <= 21) {
        echo "You are eligibal.<br>";
    } 

    echo "Here is other statement";

      /* Logical Or Operator */
      if ($age >= 18 || $age <= 21) {
        echo "You are eligibal.<br>";
    } 

      /* Logical Not Operator */
      if (!($age >= 18)) {
        echo "You are eligibal.<br>";
    } 

      /* Logical xor Operator */
      if ($age >= 18 xor $age <= 21) {
        echo "You are eligibal.<br>";
    } 
?>

