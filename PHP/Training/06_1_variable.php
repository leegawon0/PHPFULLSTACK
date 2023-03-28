<?php

// 1. 배열의 길이를 반환하는 my_len() 함수를 작성하시오.
// $arr_base = array(1, 2, 3, 4, 5); echo my_len($arr_base);

function my_len($fnc_array)
{
    $result = 0;
    foreach ($fnc_array as $val)
    {
        $result++;
    }
    return $result;
}

$arr_base = array(1, 2, 3, 4, 5, 1, 1, 1, 1, 1, 1);

$len = my_len($arr_base);
echo $len;

?>