<?php

// 코드의 재사용성, 가독성 ↑

// 변수 $a와 $b를 더한 후 출력해주세요.
// $a = 32;
// $b = 12;
// $sum = $a + $b;

// echo $sum;

// function
// function fnc_add($int_a, $int_b)
// {
//     $sum = $int_a + $int_b;
//     return $sum;
// }

// fnc_add 함수 호출
// $result_add = fnc_add(32, 12);
// echo $result_add;

// 가변 파라미터 함수
// function fnc_args_add()
// {
//     $args = func_get_args(); // 가변 파라미터 습득
//     $sum = 0; // 더하기 결과 저장 변수

//     // 루프 : 더하기 실행
//     foreach ($args as $val) {
//         $sum += $val;
//     }
//     return $sum;
// }

// echo fnc_args_add(1, 2, 3, 4, 5);

// 재귀함수

function rcs( $prmt_a )
{
    if( $prmt_a === 1)
    {
        return 1;
    }
    return $prmt_a * rcs($prmt_a - 1);
}

echo rcs(6);

?>