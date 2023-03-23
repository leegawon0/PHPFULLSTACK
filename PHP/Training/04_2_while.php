<?php

$dan = 2;
$num = 1;
$maxdan = 19;

while( $dan <= $maxdan )
{
    $num = 1;
    echo $dan."단\n";
    while( $num <= $maxdan )
    {
        $result = $dan." * ".$num." = ". $dan * $num. "\n";
        echo $result;
        ++$num;
    }
    ++$dan;
    echo "\n";
}

?>