<?php

/***********************************
파일명 :
시스템명 :
이력
    v001 : new - (사번)
    v002 : fnc_star 수정 - (사번)
***********************************/

// 함수를 하나 만들고, 호출하여 별 찍기

// function fnc_star( $param_num )
// {
//     for ($i=1; $i <= $param_num; $i++) { 
//             echo "*";
//         }
//     echo "\n";
// }

// function fnc_star2()
// {
//     static $star = "*";
//     echo $star."\n";
//     $star .= "*";
// }

// fnc_star(1);
// fnc_star(2);
// fnc_star(3);
// fnc_star(4);
// fnc_star(5);

// echo "\n";

// fnc_star2();
// fnc_star2();
// fnc_star2();
// fnc_star2();
// fnc_star2();

// 위 함수를 내가 원하는 문자로 찍고 싶다는 요청

// echo str_repeat("☆", 3);

// function fnc_star( $param_num ) // v002 del
function fnc_char( $param_num, $param_char = "★" ) // v002 add // 파라미터에 = "*" 이런거 첫번째 파라미터엔 못 쓰고 두번째 파라미터부터 쓸 수 있음
{
    for ($i=1; $i <= $param_num; $i++) { 
            // echo "*"; // v002 del
            echo $param_char; // v002 add
        }
    echo "\n";
}

// echo fnc_char( 1 );
// echo fnc_char( 2, "❤" );
// echo fnc_char( 3 );
// echo fnc_char( 4, "❤" );
// echo fnc_char( 5 );

function fnc_ref2( &$param_str )
{
    echo "2번 : $param_str\n";
    $param_str = "fnc_ref2에서 값 변경";
    echo "3번 : $param_str\n";
}
$str = "aaa";
echo "1번 : $str\n";
fnc_ref2( $str );
echo "4번 : $str\n";

?>