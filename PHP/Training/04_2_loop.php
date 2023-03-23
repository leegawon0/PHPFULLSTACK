<?php

/* 1. 반복문을 이용해서 아래와 같이 출력해 주세요.

내가 입력한 갯수만큼

*
**
***
****
*****

*/
// $maxnum1 = 8;
// $maxnum0 = 0;

// for ($num2=1; $num2 <= $maxnum1; $num2++)
// {   
//     $maxnum0++;
//     for ($num1=1; $num1 <= $maxnum0; $num1++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }

$maxnum = 5;

for ($num1=1; $num1 <= $maxnum; $num1++)
{   
    for ($num2=1; $num2 <= $num1; $num2++)
    {
        echo "*";
    }
    echo "\n";
}

?>