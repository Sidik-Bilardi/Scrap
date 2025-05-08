<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  $escapedColor = htmlspecialchars($x, ENT_QUOTES, 'UTF-8');
  $text = "";
  if($x == "green"){
    $text = "I Like ". $escapedColor ;
  }else{
    $text = "I dont Like ". $escapedColor ;
  }
  echo $text. "<br>";
}
?>