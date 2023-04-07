<?php
fscanf( STDIN, "%d", $N );
if($N >= 1 && $N <= 9)
{
    for ($i=1; $i <= 9; $i++) { 
        echo $N." * ".$i." = ".$N*$i."\n";
    }
}
?>