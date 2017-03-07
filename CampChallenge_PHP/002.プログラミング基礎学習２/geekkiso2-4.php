<?php
$x = "";
for($i = 0; $i < 30; $i++){
$y = $x."A";
$x = $y;
}
var_dump($x);
