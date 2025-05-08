<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo htmlspecialchars($x, ENT_QUOTES, 'UTF-8') . '<br>';
}
echo "Heloooo";
?>