<?php

// 별찍기를 함수로 만들어봅시다.

function fnc_star($n)
{
    $s = 1;
    while ($s <= $n)
    {
        echo "*";
        $s++;
    }
    echo "\n";
}

function fnc_star_static($n)
{
    $s = 1;
    while ($s <= $n)
    {
        fnc_star($n);
        $s++;
    }
}

function fnc_star_asc($n)
{
    $s = 1;
    while ($s <= $n)
    {
        fnc_star($s);
        $s++;
    }
}

function fnc_star_desc($n)
{
    $s = $n;
    while ($s >= 1)
    {
        fnc_star($s);
        $s--;
    }
}

echo fnc_star_static(3);

echo "\n";

echo fnc_star_asc(5);

echo "\n";

echo fnc_star_desc(7);

?>