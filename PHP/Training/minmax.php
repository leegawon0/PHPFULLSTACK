<?php

// 배열의 요소 중 최대값과 최소값을 출력해주는 함수를 구현해 주세요. my_max(), my_min()

function my_max($arr)
{
    $cnt = count($arr);

    if($arr[0] >= $arr[1])
    {
        $formax = $arr[0];
    }
    else
    {
        $formax = $arr[1];
    }

    for ($i=2; $i < $cnt ; $i++) { 
        if($arr[$i] >= $formax)
        {
            $formax = $arr[$i];
        }
        else
        {
            $formax = $formax;
        }
    }
    return $formax;
}

function my_min($arr)
{
    $cnt = count($arr);

    if($arr[0] <= $arr[1])
    {
        $formax = $arr[0];
    }
    else
    {
        $formax = $arr[1];
    }

    for ($i=2; $i < $cnt ; $i++) { 
        if($arr[$i] <= $formax)
        {
            $formax = $arr[$i];
        }
        else
        {
            $formax = $formax;
        }
    }
    return $formax;
}

// 배열이 홀수일때 중간값을 도출하는 함수

function my_cent_odd($arr)
{
    $cnt = count($arr);
    for ($ii = 1; $ii < $cnt; $ii++) { 
        for ($i = $cnt; $i > $ii; $i--) { 
            if($arr[$i-1] < $arr[$i-2])
            {
                $temp = $arr[$i-1];
                $arr[$i-1] = $arr[$i-2];
                $arr[$i-2] = $temp;
            }
        }
    }
    echo $arr[($cnt-1)/2];
}

// 배열이 짝수일때 중간값 2개를 도출하는 함수

function my_cent_even($arr)
{
    $cnt = count($arr);
    for ($ii = 1; $ii < $cnt; $ii++) { 
        for ($i = $cnt; $i > $ii; $i--) { 
            if($arr[$i-1] < $arr[$i-2])
            {
                $temp = $arr[$i-1];
                $arr[$i-1] = $arr[$i-2];
                $arr[$i-2] = $temp;
            }
        }
    }
    echo $arr[($cnt-2)/2].", ".$arr[($cnt)/2];
}

// 홀수일때 중간값 1개, 짝수일때 중간값 2개를 도출하는 함수

function my_cent($arr)
{
    $cnt = count($arr);
    for ($ii = 1; $ii < $cnt; $ii++) { 
        for ($i = $cnt; $i > $ii; $i--) { 
            if($arr[$i-1] < $arr[$i-2])
            {
                $temp = $arr[$i-1];
                $arr[$i-1] = $arr[$i-2];
                $arr[$i-2] = $temp;
            }
        }
    }
    if($cnt % 2 === 0)
    {
        echo $arr[($cnt-2)/2].", ".$arr[($cnt)/2];
    }
    else{
        echo $arr[($cnt-1)/2];
    }
}

$arr = array(5, 10, 7, 3, 1, 14);

echo "최대값 : ".my_max($arr);

echo "\n";

echo "최소값 : ".my_min($arr);

echo "\n";

echo "중간값 : "; my_cent($arr);

function my_max2($param_arr)
{
    $res_max = $param_arr[0];
    for($i=1; $i < count($param_arr); $i++)
    {
        if($res_max < $param_arr[$i])
        {
            $res_max=$param_arr[$i];
        }
    }
    return $res_max;
}

function my_min2($param_arr)
{
    $res_max = $param_arr[0];
    for($i=1; $i < count($param_arr); $i++)
    {
        if($res_max > $param_arr[$i])
        {
            $res_max=$param_arr[$i];
        }
    }
    return $res_max;
}

echo "\n";

echo my_max2($arr);

echo "\n";

echo my_min2($arr);

?>