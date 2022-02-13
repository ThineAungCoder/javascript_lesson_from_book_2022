<?php
$favcolor = "white";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

$page = "about";
// $about_page = "about";
switch ($page) {
    case 'page';
    header("Location: home_page.php");
    break;
    case 'about';
    header("Location: about_page.php");
    break;
    default:
    echo "Page not found";
    break;
}
?>
