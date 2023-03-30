<?php

// function fnc_add()
// {
//     global $global_int_a; // 전역변수 선언
//     $global_int_a = $global_int_a + 10;
//     return $global_int_a;
// }

// $global_int_a = 5; // 전역변수 초기화(값 대입)

// echo fnc_add();

// 정적 변수
// function fnc_add_1()
// {
//     $i = 1;
//     echo $i."\n";
//     $i++;
// }

// for($i = 0; $i < 3; $i++)
// { 
//     fnc_add_1();
// }

// function fnc_add_1()
// {
//     static $i = 1;
//     echo $i."\n";
//     $i++;
// }

// for($i = 0; $i < 3; $i++)
// { 
//     fnc_add_1();
// }

// 가비지컬렉션?

// call by value

// function fnc_val($int_a, $int_b)
// {
//     $int_a = 3;
//     $int_b = 4;
// }

// $int_a = 1;
// $int_b = 2;
// fnc_val(5, 6);

// echo $int_a, " ", $int_b;

// call by reference

// function fnc_val(&$a, &$b)
// {
//     $a = 3;
//     $b = 4;
// }

// $int_a = 1;
// $int_b = 2;
// fnc_val($int_a, $int_b);

// echo $int_a, " ", $int_b;

// return 함수

function sum2($n1, $n2) {
    return $n1 + $n2; // return을 만나면 함수는 종료, 함수를 호출한 위치로 다시 돌아감 아하 그래서 리턴이구나
}

echo sum2(3, 6); 

echo "\n";

// void 함수

function sum($n1, $n2) {
    echo $n1 + $n2;
    // return; (적어도 되고 안적어도 됨, 다만 void 함수에서 return은 단독으로만 쓰여야 함)
}

sum(1,2); // 반드시 단독으로 써야함 (print or echo X)

?> 