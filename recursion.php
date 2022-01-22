<?php
function a($i) {
  if($i > 10) {
    return;
  }

  echo "$i ";
  $i++;
  a($i);
}

a(1);

echo PHP_EOL;
echo PHP_EOL;

function b($start, $end, $step=1) {
  if($start > $end) {
    return;
  }
  
  echo "$start ";
  $start += $step;
  b($start, $end, $step);
}

// b(10, 30);
b(10, 30, 2);