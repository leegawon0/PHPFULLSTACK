<?php

// 1. 산술연산자
echo "더하기 : ", 1 + 1;
echo "\n빼기 : ", 1 - 1;
echo "\n곱하기 : ", 2 * 3;
echo "\n나누기 : ", 10 / 2;
echo "\n나머지 : ", 9 % 7;

echo "\n연산순서 : ", 10 - 5 * 8;
echo "\n\n";

// 2. 증가/감소 연산자
$num1 = 1;
$num2 = 1;

echo $num1++, "\n";
echo $num1;
echo "\n\n";

// 전위증가연산자 ++$num1 : $num1에 +1 한 후 $num1 출력
// 후위증가연산자 $num1++ : $num1 출력한 후 $num1에 +1
// 전위감소연산자 --$num1 : $num1에 -1 한 후 $num1 출력
// 후위감소연산자 $num1-- : $num1 출력한 후 $num1에 -1

// 3. 산술대입 연산자
$num1 = 1;
$num1 = $num1 +1;
$num2 = 1;
$num2 += 1;

echo $num1, " ", $num2;

// +=, -+, *=, /=, %=

// 4. 비교 연산자
echo 1 > 2;

var_dump(1 == '1');
var_dump(1 === '1');

var_dump(1 != '1');
var_dump(1 !== '1');

// 5. 논리 연산자
var_dump( 1 == 1 && 2 == 3 );
var_dump( 1 == 1 || 2 == 3 );
var_dump( !(1 == 1) );

echo "\n\n";

// 6. 삼항 연산자

echo 1 > 2 ? '참' : '거짓';

?>