<?php

// 1. while + if 조합
// $i = 0;
// while( $i <= 4 )
// {
//     if( $i === 1 )
//     {
//         echo "1입니다.\n";
//     }
//     else if ( $i === 4 )
//     {
//         echo "4입니다.\n";
//     }
//     ++$i;
// }

// 2. foreach + if 조합
// $arr_ass = [ "a" => 1, "b" => 2, "c" => 3 ];
// $arr_ass = array( "a" => 1, "b" => 2, "c" => 3 );

// foreach( $arr_ass as $key => $val )
// {
//     // echo "$key : $val\n";
//     if( $key === "c" || $val === 2 )
//     {
//         echo "if";
//     }
// }

// 3. 이중 for문

// for ($i=2; $i <= 9; $i++) { 
//     echo $i."단\n";
//     for ($x=1; $x <= 9; $x++) { 
//         echo "$i x $x = ", $i * $x, "\n";
//     }
//     echo "\n";
// }

// 4. 1 ~ 100 숫자 중에서 짝수의 합을 구해주세요.

$result = 0;

// for ($i = 1; $i <= 100; $i++) {
//     if($i % 2 === 0)    
//     {
//         $result += $i;
//     }
// }

// for ($i = 1; 2*$i <= 100; $i++) {
//     $result += 2*$i;
// }

for ($i = 2; $i <= 100; $i += 2) {
    $result += $i;
}

echo "정답 : ".$result;

?>