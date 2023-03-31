<?php

// 파일명 : gugudan.txt
// 파일 위치 : sam 폴더 안
// 내용은 아래와 같습니다.
// 2단 2 * 1 = 2 형식으로 9단까지

$gugudan = fopen( "../Example/sam/gugudan.txt", "w" );

function fnc_gugu($n) {
    $str_2 = "";
    for ($i=1; $i < 10; $i++) { 
        if($i === 0) {
            $str_2 = $n."단";
        }
        else {
            $str_2 .= "\n".$n." * ".$i." = ".$i*$n;
        }
    }
}

$result = fnc_gugu(2);

fputs($gugudan, $result);

// $arr_2 = array();

// for ($i=0; $i < 10; $i++) { 
//     if ($i === 0)
//     {
//         $arr_2[$i] = "2단";
//     }
//     else 
//     {
//         $arr_2[$i] = "2 * ".$i." = ".$i*2;
//     }
// }

// $str_2 = implode("\n", $arr_2);

// fputs($gugudan, $str_2);

// fputs($gugudan, "2단");
// for ($i=1; $i < 10; $i++) { 
//     fputs($gugudan, "\n2 * ".$i." = ".$i*2);
// }

// fputs($gugudan, "구구단");
// for($ii=2; $ii < 10; $ii++) {
//     fputs($gugudan, "\n".$ii."단");
//     for ($i=1; $i < 10; $i++) { 
//         fputs($gugudan, "\n".$ii." * ".$i." = ".$i*$ii);
//     }
// }

fclose($gugudan);

?>