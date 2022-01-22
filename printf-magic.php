<?php
// Swap variable
$fname = 'James';
$mid_name = 'Bond';
$lname = 'Bond';

// Target output: $lname, $fname, $mid_name ...
printf('His name is %3$s, %1$s %2$s', $fname, $lname, $mid_name);
echo "\n";

// here, SINGLE_QUOTE is a MUST
// double quote dle $ will be counted as variable; following code is wrong
// printf("His name is %3$s, %1$s %2$s")

printf("Binary of %d is %b", 12, 12);
echo "\n";

// same value (12, 2bar i.e. multiple times lekha avoid krte pari as following)
printf('Binary of %1$d is %1$b', 12); // single quote must
echo "\n";

// decimal er pore akta fixed number prjnto dekha 3.14159 26535 89793
$pi = 3.141592653589793;

printf('%.3f', $pi);
echo "\n";
printf('%.4f', $pi);
echo "\n";

$num1 = 273;
$num2 = 27.3583;

printf('%06d', $num1);  // integer 6 digit; 6 digit na thakle age add 'zero'
echo "\n";

printf('%07.2f', $num2);  // 7 digit; jar mddhe 2ta after decimal
echo "\n";

// SPRINTF
// printf prints, but sprintf only returns it into a variable
$output = sprintf('His name is %3$s, %1$s %2$s', $fname, $lname, $mid_name);
echo "$output\n";