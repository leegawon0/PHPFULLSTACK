<?php

// "I am always Hello."에서 "Hello"를 "Happy"로 바꾸어 출력하는 프로그램을 구현해 주세요.

$str_1 = "I am always Hello.";

// function fnc_hello_happy ($str)
// {
//     $str_expl = explode(" ", $str);
//     $str_expl[3] = "Happy.";
//     $str_impl = implode(" ", $str_expl);
//     return $str = $str_impl;
// }

// $str_2 = fnc_hello_happy($str_1);
// echo $str_2;

// $str_all = "I am always Hello.";
// $str_expl = explode("Hello", $str_all);
// $str_impl = implode("Happy", $str_expl);
// echo $str_impl;

// 함수명 : my_str_replace
// 리턴값 : String $result_str

function my_str_replace($arr, $org, $rep)
{
    $str_expl = explode($org, $arr);
    $str_impl = implode($rep, $str_expl); 
    return $str_impl;
}

$result_str = my_str_replace($str_1, "Hello", "apple");
echo $result_str;

?>