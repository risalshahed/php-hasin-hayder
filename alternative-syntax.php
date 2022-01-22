<?php
$n=-14;

// with if else statement
if($n%2 == 0):
  echo "even number";
  echo PHP_EOL;
  echo "divsible by 2";
  echo PHP_EOL;

else:
  echo "odd number";
  echo PHP_EOL;
  echo "not divsible by 2";
  echo PHP_EOL;

endif;

// with switch case statement
switch($n%2):
  case 0:
  echo "even number";
  echo PHP_EOL;
  echo "divsible by 2";
  echo PHP_EOL;
  break;

  default:
  echo "odd number";
  echo PHP_EOL;
  echo "not divsible by 2";

endswitch;