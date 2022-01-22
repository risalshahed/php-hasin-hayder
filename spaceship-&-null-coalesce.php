<?php
// spaceship operator <=>
$x = 4;
$y = 5;
$result = $x <=> $y;  // < is -1, > is 1, = is 0

if ($result == 1) {
  echo "$x is greater than $y\n";
} else if ($result == -1) {
  echo "$x is less than $y\n";
} else if ($result == 0) {
  echo "$x is equal to $y\n";
}

// null coalesce operator ??
$user_latitude = 29;
$default_latitude = 23.5;

// $user_latitude thakle print kro else print default value
$latitude = $user_latitude ?? $default_latitude;

echo $latitude;