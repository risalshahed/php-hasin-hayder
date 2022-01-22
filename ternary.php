<?php
$num = 49;

// $mark = (60==$num) ? "Full Mark" : "Not Full Mark";

$mark = (60==$num) ? "Full Mark" : ( ($num>50 && $num<60) ? "More than 50" : ( ($num>60 || $num<0) ? "Invalid input" : "Not Full Mark" ) );

echo "$mark\n";

// It's a problem if it goes to THIRD_LEVEL!



