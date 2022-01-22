<?php
function fibonacci($a, $b, $result, $end) {
  $result = $a + $b;
  while($result < $end) {
    $a = $b;
    $b = $result;
    $result = $a + $b;
    echo "$result ";
  }
}

fibonacci(0, 1, 1, 100);