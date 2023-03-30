<?php

// 별찍기를 함수로 만들어봅시다.

function fnc_star($n)
{
    for($s=1; $s<=$n; $s++)
    {
        echo "*";
    }
    echo "\n";
}

function fnc_star_static($n)
{
    for($s=1; $s<=$n; $s++)
    {
        fnc_star($n);
    }
}

function fnc_star_asc($n)
{
    for($s=1; $s<=$n; $s++)
    {
        fnc_star($s);
    }
}

function fnc_star_desc($n)
{
    for($s=$n; $s>=1; $s--)
    {
        fnc_star($s);
    }
}

echo fnc_star_static(3);

echo "\n";

echo fnc_star_asc(5);

echo "\n";

echo fnc_star_desc(7);

?>