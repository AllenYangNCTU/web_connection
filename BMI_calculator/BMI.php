<?php
$w=$_GET['weight'];
$h=$_GET['height'];
$h=(float)($h/100);
$BMI=(float)($w/$h/$h);
ini_set('precision', 4);
print("BMI: ".$BMI);
?>