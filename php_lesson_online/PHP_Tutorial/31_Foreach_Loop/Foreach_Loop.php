<?php 
$colors = [
    "red",
    "green",
    "blue"
];

foreach ($colors as  $value) {
    echo $value . "<br>";
}

/* Associative Array For Foreach */
$age = [
    "bill" => 25,
    "steve" => 28,
    "elon" => 22,
];

foreach ($age as $key => $value) {
   echo "$key = $value<br>";
}

/* -------------work with ul tag------------------- */
echo "<ul>";
foreach ($age as $key => $value) {
    echo "<li>$key = $value </li>";
}

echo "</ul>";

?>