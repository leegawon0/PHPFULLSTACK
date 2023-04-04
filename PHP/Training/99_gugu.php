<?php

// 함수를 하나 만들고, 호출하여 별 찍기

function fnc_star( $num )
{
    for ($i=1; $i <= $num; $i++) { 
            echo "*";
        }
    echo "\n";
}

function fnc_star2()
{
    static $star = "*";
    echo $star."\n";
    $star .= "*";
}

fnc_star(1);
fnc_star(2);
fnc_star(3);
fnc_star(4);
fnc_star(5);

echo "\n";

fnc_star2();
fnc_star2();
fnc_star2();
fnc_star2();
fnc_star2();

?>