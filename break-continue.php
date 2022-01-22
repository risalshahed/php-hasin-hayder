<?php
for($i=1; $i<10; $i++) {
  // echo "$i ";  if er agey dle 6 print hbe
  if($i == 6) {
    break;
  }
  echo "$i "; // if er pore dle 6 print hbe naa
}
echo PHP_EOL;
echo PHP_EOL;

for($i=1; $i<10; $i++) {
  // echo "$i ";  if er agey dle 6 print hbe
  // continue er age if a jei condition thakbe, shei condition BREAK hbe, bakigula continue hbe!
  if($i == 6) {
    continue;
  }
  echo "$i "; // if er pore dle 6 print hbe naa
}

echo PHP_EOL;
echo PHP_EOL;

for($i=1; $i<10; $i++) {
  // continue er age if a jei condition thakbe, shei condition BREAK hbe, bakigula continue hbe!
  if($i < 6) {
    continue;
  }
  echo "$i ";
}
echo PHP_EOL;
echo PHP_EOL;

$i=0;
while($i < 10) {
  if($i >= 6) {
    continue;
  }
  echo "$i ";
  $i++;
}