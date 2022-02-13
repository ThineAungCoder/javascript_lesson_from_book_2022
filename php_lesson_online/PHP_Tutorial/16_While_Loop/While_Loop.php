<?php
$a = 1;

 while($a <= 10){ 
  echo "Hello Yahoo Baba<br>";
  $a = $a + 1; //Increment Loop
} 

while($a <= 20){ 
  echo $a . ") Hello Yahoo Baba<br>";
  $a = $a++; //counting
}


$a = 10;
while($a >= 1){ 
  echo $a . ") Hello Yahoo Baba<br>";
    $a--; //Decrement Loop
}

echo "<ul>";
while($a >= 1){
  echo "<li>".$a . ") Hello Yahoo Baba</li>";
  $a = $a - 1;
}
echo "</ul>";


while($a <= 10){ 
  echo "Hello Yahoo Baba<br>";
  $a = $a + 2; //increament of 2 or 3
}
?>