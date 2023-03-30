<?php

// min, max, floor, round, ceil

echo floor(4.5)."\n";
echo ceil(4.5)."\n";
echo round(4.5)."\n";
echo min(array(3, 4, 5, 2, 3, 1, 2))."\n";
echo max(array(3, 4, 5, 2, 3, 1, 2))."\n";
echo rand(0, 5)."\n";

echo "\n";

// 날짜 관련 함수
echo date("Y-m-d H:i:s")."\n";
echo date("y-m-d h:i:s A")."\n";
echo date("y-M-D h:i:s")."\n";

echo "\n";

echo 10000000000000000000, "\n";

echo "\n";

// 난수함수

echo mt_rand(0, 3)."\n";

echo "\n";

// 운영체제 / PHP 버전 상수

echo "OS : ".PHP_OS." Operating System"."\n";
echo "PHP : ".PHP_VERSION." Operating System"."\n";
// print_r($GLOBALS);

// phpinfo();

echo "\n";

// 정의 함수 (상수 선언) 명명 규칙: 상수명은 꼭 대문자로 작성한다.

define("INT_ONE", 1);
echo INT_ONE; // 실수(mistake)를 줄이기 위해서 사용

?>