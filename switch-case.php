<?php

$device = 'tablet';

switch($device) {
  case 'desktop':   // $device == 'desktop';
  case 'laptop':   // $device == 'laptop';
    echo "$device is good for professional work\n";
    break;

  case 'mobile':
    echo "$device is good for entertainment\n";
    break;

  case 'tablet':
    echo "$device is good for relax work\n";
    break;  // not necessary to write 'break' at the very LAST case statement
}

// Nested switch case
$num = -18;
$rem = $num % 2;

switch($rem) {
  case 0:
    switch($num) {
      case $num > 0:
        echo "$num is a positive even number\n";
        break;

      case $num < 0:
        echo "$num is a negative even number\n";
        break;
    }
    break;

  case 1 || -1:   // V.V.I. Line
  // default:
    switch($num) {
      case $num > 0:
        echo "$num is a positive odd number\n";
        break;

      case $num < 0:
        echo "$num is a negative odd number\n";
        break;
    }
    break;  
}

