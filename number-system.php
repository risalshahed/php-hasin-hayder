<?php
// Octal numbers -> 0num (zero & number's combination)
// Hexadecimal numbers -> 0xnum (zero, X (small hand) & number's combination)

$d = 12;
$o = 016;
$hex = 0x21;
$hex2 = 0xFF;

printf("Numbers are %d, %d, %d & %d\n", $d, $o, $hex, $hex2);

printf("The quivalent binary number of %d is %b\n", $d, $d);

printf("The quivalent octal number of %h (hexa-decimal) is %o\n", $hex, $o);