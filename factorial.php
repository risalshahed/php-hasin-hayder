<?php
$n = 7;

// While Loop
/* $result = 1;
$m = $n;
while($m > 1) {
  $result *= $m;
  $m--;
} */

// For Loop
// $result = 1;
/* for($m = $n, $result = 1; $m > 1; $m--) {
  $result *= $m;
} */

// echo "Factorial of $n is $result";

// Smart coding
$result = 1;
$m = 1;
// $j = 1;
while($m <= 10) {
  $result *= $m;
  echo "Factorial of $m is $result \n";
  $m++;
  // $j++;
}
// echo "$j operation";