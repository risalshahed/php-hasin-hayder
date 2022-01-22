<?php

$dd = 2;
$dd *= 3; // means -> $dd = $dd * 3

echo "$dd\n";

$aa = 2;
$aa **= 3; // means -> $dd = $dd ** 3
// ** -> to the power

echo "$aa\n";

$mod = 22 % 5;
// % -> remainder (after 22 divides 5)

echo "$mod\n";

// +, -, *, /, ** are "operators"
// the numbers e.g. 22, 5, 2, 3 etc. are "operands"

$n = 7;
$m = $n++;
// $m = $n++; MEANS
/* 
$m = $n;
$n = $n + 1;
*/

echo "{$m}\n{$n}\n";

$n = 17;
$m = ++$n;
// $m = ++$n; MEANS
/* 
$n = $n + 1;
$m = $n;
*/

echo "{$m}\n{$n}\n";