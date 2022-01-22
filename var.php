<?php

$x = 6;
$y = 2;
echo $x+$y;

// "\n" must be wrapped by DOUBLE quote
echo "\n";  // new line; BUT in browser, "<br>"

// variable must be wrapped by DOUBLE quote if it's wrapped by quote
echo "$x digit salary";

echo "\n";
// variable curly braces diye wrap kra good practice
echo "It's {$y}0{$y}{$y}\n";

// constant
define('PI', 3.14159);

echo "The value of pi is " . PI . "\n";

echo constant('PI') . "\n";

// Once defined, the value of constant can't be changed

$age = 16;
$z = 'age';

echo $$z . "\n";

