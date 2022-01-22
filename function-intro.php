<?php
// Check if the argument is even or odd
function oddEven($n) {  // $n is parameter
  if($n%2 == 0) {
    echo "{$n} is an even number\n";
  } else {
    echo "{$n} is an odd number\n";
  }
}

oddEven(-21);   // -21 or the number is argument

function factorial(int $n) {
  $result = 1;
  for($i=$n; $i>1; $i--) {
    $result *= $i;
  }
  // return $result;
  echo $result;
}

factorial(7);