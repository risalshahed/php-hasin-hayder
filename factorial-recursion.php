<?php
function factorial($n):int {
  if ($n < 0) {
    echo 'invalid input';
  } else if ($n <= 1) {
    return 1;
  } else {
    return $n * factorial($n - 1);
  }
}

echo factorial(6);