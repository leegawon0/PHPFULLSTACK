<?php

// 함수명   : fnc_sum
// 기능     : 파라미터를 더한 값을 리턴
// 파라미터 : INT $param_a
//          : INT $param_b
// 리턴값   : INT $sum

// function fnc_sum($param_a, $param_b)
// {
//     $sum = $param_a + $param_b;
//     return $sum;
// }

// echo fnc_sum(1, 2);

// 가변 파라미터
// function fnc_sum2( ...$param_numbers )
// {
//     return array_sum($param_numbers);
// }

// echo fnc_sum2(1, 2, 3, 4, 5);

// global 변수

// function fnc_global()
// {
//     global $global_i;
//     $global_i = 0;
// }

// $global_i = 5;
// fnc_global();

// echo $global_i;

// static

// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }

// fnc_static();
// fnc_static();
// fnc_static();
// fnc_static();

// function fnc_reference( &$param_str )
// {
//     $param_str = "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;


$str = 3;
function fnc_reference( &$param_str )
{
    $param_str = 5;
    return $param_str;
}
echo fnc_reference( $str );
echo "\n";
echo $str;

?>