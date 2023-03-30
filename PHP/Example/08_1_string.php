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
print_r($arr_url)."\n";

// 역순의 문자열
$str_abcd = "abcd";
echo strrev($str_abcd), "\n";

// 문자열 자르기
$str_1 = "가나다라마";
echo substr($str_1, 2), "\n";
echo mb_substr($str_1, 2, 1), "\n";
echo mb_substr($str_1, -3, 2), "\n"; // 스타트 파라미터가 음수이면 오른쪽부터 자릅니다.

// 문자열 자르기로 "PHP입니다."만 출력해 주세요.
$str_tng = "안녕하세요. PHP입니다.";
echo mb_substr($str_tng, 7), "\n";

// 문자열 자르기로 "세요. P"만 출력해 주세요.
echo mb_substr($str_tng, 3, 5), "\n";

// 문자열 빈공간 지우기
$str_trim = "           abcd      ";
echo trim($str_trim), "\n";
echo rtrim($str_trim), "\n";
echo ltrim($str_trim), "\n";

// 문자열의 길이를 구하는 함수
$str_len = "가나다라";
echo strlen($str_len), "\n";
echo mb_strlen($str_len), "\n";

// 문자열 포맷에 따라 출력하는 함수
printf("안녕하세요. %s입니다. %d", "이가원", 1234);
echo "\n";

define("WELCOME", "안녕하세요. %s님.");
printf(WELCOME, "홍길동");

echo "\n";

// 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
// 에러 번호 : 에러종류
// 1 : 시스템
// 2 : 로그인
// 3 : 접속

define("E_MSG", "ERROR(%d) : %s ERROR가 발생했습니다.\n");
printf(E_MSG, 1, "시스템");
printf(E_MSG, 2, "로그인");
printf(E_MSG, 3, "접속");

// 문자열을 분리하는 함수
$str_sscanf = "가나다라 50 abcd";
sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";

// 문자열 반복해서 찍어주는 함수
echo str_repeat("으후루꾸꾸루후으", 5), "\n";

// 문자열을 특정 문자열로 분리하는 함수
$str_expl = "홍길동, 27세, 남자, 의적, 조선";
$arr_expl = explode(", ", $str_expl);
print_r($arr_expl);

// 배열을 특정 문자열로 합치는 함수 : implode()
$str_impl = implode(" | ", $arr_expl);
echo $str_impl;

?>