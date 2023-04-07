<?php
fscanf( STDIN, "%d %d %d", $a, $b, $c );
echo ( $a + $b ) % $c, "\n";
echo ( ( $a % $c ) + ( $b % $c ) ) % $c, "\n";
echo ( $a * $b ) % $c, "\n";
echo ( ( $a % $c ) * ( $b % $c ) ) % $c;
?>