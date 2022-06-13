<?php
//is_numeric() function can be used to find whether a variable is numeric
$x = 2564;
var_dump(is_numeric($x));

echo "\n";

$x = "4586";
var_dump(is_numeric($x));

echo "\n";

$x = "35.45" + 100;
var_dump(is_numeric($x));

echo "\n";

$x = "Hi";
var_dump(is_numeric($x));
?>  