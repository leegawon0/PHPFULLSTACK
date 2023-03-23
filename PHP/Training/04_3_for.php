<?php

$maxdan = 9;

for ($dan=1; $dan <= $maxdan; $dan++) { 
    echo $dan."단\n";
    for ($num=1; $num <= $maxdan; $num++) { 
        $result = $dan." * ".$num." = ". $dan * $num. "\n";
        echo $result;
    }
    echo "\n";
}

?>