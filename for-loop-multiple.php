<?php
for($i=1;$i<=5;$i++) {
  echo "$i " . 6-$i . "\n";
}

for($i=1, $j=1; $i<100; $i++) {
  if($i % 7 == 0 || $i % 11 == 0) {
    echo "$i ";
    $j++;
  }
}
echo "\n$j operations happened\n";