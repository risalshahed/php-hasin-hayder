<?php
$a = 40;
$b = 40;

// V.V.I. 1st condition TRUE howay porer gula r run krbei na, jodio 2nd one is more valid!
if($a >= $b) {
  echo 'a has more or equal than b';
} elseif($a == $b) {
  echo 'a has equal to b';
}
elseif($a > $b) {
  echo 'a has more than b';
}
elseif($a < $b) {
  echo 'a has less than b';
}
echo "\n";

$fruit = 'apple';

// scalar value thakle seita agey dle valo, shei khetre vule single "=" dle error dbe
if('Apple' == $fruit || 'apple' == $fruit) {
  echo "{$fruit} has fallen on Isaac Newton's head\n";
} else {
  echo "{$fruit} has not fallen on anyone's head\n";
}

// LEAP YEAR
$year = 2100;

// Smart code (Less Calculations for Machine)
if( $year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0 ) {
  echo "$year is a leap year\n";
} else {
  echo "$year is not a leap year\n";
}

// nested if statements na likhe uporer mto lekha far better & readable


/* $divBy4 = $year % 4;
$divBy100 = $year % 100;
$divBy400 = $year % 400;

// Easily Readable Code (More Calculations for Machine)
if($divBy4 == 0 && $divBy100 == 0 && $divBy400 == 0) {
  echo "$year is a leap year";
} elseif($divBy4 == 0 && $divBy100 == 0 && $divBy400 != 0) {
  echo "$year is not a leap year";
} elseif($divBy4 == 0) {
  echo "$year is a leap year";
} else {
  echo "$year is not a leap year";
} */