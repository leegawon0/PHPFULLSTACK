<?php

$str_1 = "aaa";
$str_2 = "bbb";

echo $str_1.$str_2;

echo "\n";

// 대소문자 변수
$str_en = "abCd efgh";

// 소문자 변환
echo strtolower($str_en), "\n";

// 대문자 변환
echo strtoupper($str_en), "\n";

// 맨 앞 글자만 대문자로 변환
echo ucfirst($str_en), "\n";

// 각 단어의 맨앞글자만 대문자로 변환
echo ucwords($str_en), "\n";

// url관련 함수
$url = "https://www.google.com/webhp?hl=ko&sa=X&ved=0ahUKEwjCpY_Wz7z9AhVEFIgKHWFFDlsQPAgI";

$arr_url = parse_url($url);
print_r($arr_url);

?>