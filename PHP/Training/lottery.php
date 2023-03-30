<?php

$lottery = array("랜덤", "랜덤", "랜덤", "랜덤", "랜덤");

function fnc_lottery($lottery)
{
    $lottery[0] = mt_rand(1, 45);
    $lottery[1] = mt_rand(1, 45);
    $lottery[2] = mt_rand(1, 45);
    $lottery[3] = mt_rand(1, 45);
    $lottery[4] = mt_rand(1, 45);
    $lottery[5] = mt_rand(1, 45);
    while ( $lottery[0] === $lottery[1] || $lottery[0] === $lottery[2] || $lottery[0] === $lottery[3] || $lottery[0] === $lottery[4] || $lottery[0] === $lottery[5]  || $lottery[1] === $lottery[2] || $lottery[1] === $lottery[3] || $lottery[1] === $lottery[4] || $lottery[1] === $lottery[5] || $lottery[2] === $lottery[3] || $lottery[2] === $lottery[4] || $lottery[2] === $lottery[5] || $lottery[3] === $lottery[4] || $lottery[3] === $lottery[5] || $lottery[4] === $lottery[5] )
    {
        $lottery[0] = mt_rand(1, 45);
        $lottery[1] = mt_rand(1, 45);
        $lottery[2] = mt_rand(1, 45);
        $lottery[3] = mt_rand(1, 45);
        $lottery[4] = mt_rand(1, 45);
        $lottery[5] = mt_rand(1, 45);
    }
    $cnt = count($lottery);
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
    return $lottery;
}

$lot = fnc_lottery($lottery);

print_r($lot);

?>