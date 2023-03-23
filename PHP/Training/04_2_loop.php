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

// $maxnum = 5;

// for ($num1=1; $num1 <= $maxnum; $num1++)
// {   
//     for ($num2=1; $num2 <= $num1; $num2++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }

// $maxnum1 = 5;
// $maxnum0 = 5;

// for ($num2=1; $num2 <= $maxnum1; $num2++)
// {   
//     $maxnum0--;
//     for ($num1=1; $num1 <= $maxnum0 + 1; $num1++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }

// $maxnum = 5;

// for ($num1=1; $num1 <= $maxnum; $num1++)
// {   
//     for ($num2=$maxnum; $num2 >= $num1; $num2--)
//     {
//         echo "*";
//     }
//     echo "\n";
// }

// <<마름모>>

// $maxnum = 10;

// for ($num1=1; $num1 <= $maxnum; $num1++)
// {   
//     for ($num4=$maxnum-1; $num4 >= $num1; $num4--)
//     {
//         echo " ";
//     }
//     for ($num2=1; $num2 <= $num1; $num2++)
//     {
//         echo "*";
//     }
//     for ($num3=2; $num3 <= $num1; $num3++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }

// $maxnum = $maxnum - 1;

// for ($num1=1; $num1 <= $maxnum; $num1++)
// {   
//     for ($num4=1; $num4 <= $num1; $num4++)
//     {
//         echo " ";
//     }
//     for ($num2=$maxnum; $num2 >= $num1; $num2--)
//     {
//         echo "*";
//     }
//     for ($num3=$maxnum-1; $num3 >= $num1; $num3--)
//     {
//         echo "*";
//     }
//     echo "\n";
// }


for ($sosu=1; $sosu <= 100; $sosu++) { 
    if ($sosu == 1)
    {
        continue;
    }
    else if (($sosu % 2 != 0) && ($sosu % 3 != 0) && ($sosu % 5 != 0) && ($sosu % 7 != 0))
    {
    echo $sosu, "\n";
    }
    else if (($sosu == 2) || ($sosu == 3) || ($sosu == 5) || ($sosu == 7))
    {
    echo $sosu, "\n";
    }
}

?>