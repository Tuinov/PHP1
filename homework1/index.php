<?php
$a = 10; 
$b = 22;

echo $a.'<br>';
echo $b.'<br>';

$a -= $b = ($a += $b) - $b;

echo $a.'<br>';
echo $b.'<br>';

$year = 2019;

$content = file_get_contents("content.php");

$content = str_replace("Вася", "Евгений", $content);

include "main.php";
?>
