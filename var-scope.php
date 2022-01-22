<?php
// $g = 'random';

// thekay na porle GLOBAL call krbo na, bad practice eita

/* function something() {
  // global $g;
  // echo $g;
  echo $GLOBALS['g'];
}

something(); */


/* function something() {
  // local scope
  $g = 'random';
  echo $g;
}

something();
// echo $g;  // asbe na, cz $g is not global anymore! */

function something() {
  // (***) but it's LOCAL scope, NOT global
  static $i;  // $i er new value store krbe ei static (***)
  $i = $i ?? 0;
  $i++;
  echo "$i ";
}

// echo $i;  // asbe na, cz $g is not global anymore!

something();
something();
something();
something();
something();
