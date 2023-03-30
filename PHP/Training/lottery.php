<?php

$lottery = array($num1, $num2, $num3, $num4, $num5, $num6);
$cnt = count($lottery);


for ($i=0; $i < $cnt ; $i++) { 
    $lottery[0] = mt_rand(1, 45);
    $lottery[1] = mt_rand(1, 45);
    if($lottery[$i] === $lottery[$i+1])
    {
        $lottery[$i] = mt_rand(1, 45);
    }
    else
    {
        $lottery[]
    }
}

for ($ii = 1; $ii < $cnt; $ii++) { 
    for ($i = $cnt; $i > $ii; $i--) { 
        if($lottery[$i-1] < $lottery[$i-2])
        {
            $temp = $lottery[$i-1];
            $lottery[$i-1] = $lottery[$i-2];
            $lottery[$i-2] = $temp;
        }
    }
}

print_r($lottery);

?>