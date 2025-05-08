<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  $color = htmlspecialchars($x, ENT_QUOTES, 'UTF-8') . '<br>';
  $text = "";
  if($color == "green"){
    $text = "I Like ".$color;
  }else{
    $text = "I dont Like ".$color;
  }
  echo $text;
}
?>