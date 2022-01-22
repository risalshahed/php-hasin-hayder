<?php
/* function unlimited_args(...$params):int {
  $result = 0;
  for($i = 0; $i < count($params); $i++) {
    $result += $params[$i];
  }
  return $result;
} */

function unlimited_args($x, $y, ...$params):int {
  $result = 0;
  for($i = 0; $i < count($params); $i++) {
    $result += $params[$i];
  }
  return $result;
}
// prothom 2ta value baad a bakigula add hbe! cz, here, 1=$x & 2=$y
echo unlimited_args(1,2,3,4,5,6,7);
