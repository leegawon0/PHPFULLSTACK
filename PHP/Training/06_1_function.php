<?php

// 두 매개변수의 차를 구하는 함수를 구현해 주세요.

function fnc_sub($sub_x, $sub_y)
{
    $result = $sub_x - $sub_y;
    return $result;
}

// 두 매개변수를 나누는 함수를 구현해 주세요.

function fnc_div($div_x, $div_y)
{
    $result = $div_x / $div_y;
    return $result;
}

// 두 매개변수를 곱하는 함수를 구현해 주세요.

function fnc_mul($mul_x, $mul_y)
{
    $result = $mul_x * $mul_y;
    return $result;
}

// echo fnc_sub(32, 12)."\n";
// echo fnc_div(65, 5)."\n";
// echo fnc_mul(25, 3);

// 빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현해 주세요.

function fnc_args_sub()
{
    $args = func_get_args();
    $sub = 0;
    foreach ($args as $val) {
        if($args[0]===$val)
        {
            $sub = $val;
        }
        else
        {
        $sub -= $val;
        }
    }
    return $sub;
}

function fnc_args_mul()
{
    $args = func_get_args();
    $mul = 1;
    foreach ($args as $val) {
        $mul *= $val;
    }
    return $mul;
}

function fnc_args_div()
{
    $args = func_get_args();
    $div = 1;
    foreach ($args as $val) {
        if($args[0]===$val)
        {
            $div = $val;
        }
        else
        {
            $div /= $val;
        }
    }
    return $div;
}

function fnc_args_sub2()
{
    $args = func_get_args();
    $sub = 2*$args[0];
    foreach ($args as $val) {
        $sub -= $val;
    }
    return $sub;
}

function fnc_args_div2()
{
    $args = func_get_args();
    $div = pow($args[0],2);
    foreach ($args as $val) {
        $div /= $val;
    }
    return $div;
}

function fnc_args_sub3()
{
    $args = func_get_args();
    $sub = null;

    foreach ($args as $val) {
        if(is_null($sub))
        {
            $sub = $val;
        }
        else 
        {
            $sub -= $val;
        }
    }
    return $sub;
}

echo fnc_args_sub(10, 10, 3)."\n";
echo fnc_args_mul(10, 2, 3)."\n";
echo fnc_args_div(60, 2, 5)."\n";
echo fnc_args_sub2(20, 20, 3)."\n";
echo fnc_args_div(80, 4, 5)."\n";
echo fnc_args_sub3(10, 2, 3);

?>