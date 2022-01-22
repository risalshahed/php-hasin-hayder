<?php
/* for($i=1; $i<=20; $i++) {
// for($i=2; $i<=20; $i+=2) {
  // echo "$i ";
  echo "$i \n";
} */

// i jto gula, toto gula star print krbo
for($i=1; $i<=5; $i++) {
  for($j=1; $j<=$i; $j++) {
    echo "*";
  }
  echo "\n";
}

for($i=4; $i>0; $i--) {
  for($j=1; $j<=$i; $j++) {
    echo "*";
  }
  echo "\n";
}

// while loop
$i = 1;

 while($i < 6) {
  echo "$i ";
  $i++;
}
echo PHP_EOL;

// do_while loop
$k = 1;
do {
  echo "$k ";
  $k++;
} while($k < 6);
echo PHP_EOL;
echo PHP_EOL;

// **** do_while loop a, agey statement execute hy, pore condition check hoy, so CONDITION_FALSE hoileo MINIMUM ONE TIME statement execute hbe!
?>
## False Execution
<?php
$m = 7;
do {
  echo "$m ";
  $m++;
} while($m < 6);
echo PHP_EOL;
echo PHP_EOL;

?>
## Go To
<?php
$i = 0;
a: $i+=2;
echo "$i ";
if($i < 10) goto a;
