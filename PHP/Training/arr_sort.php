<?php

// $arr = array(5, 10, 7, 3, 1);

// count 함수를 이용해서 0 > 5, 1 > 10, 2 > 7, 3 > 3, 4 > 1 이런식으로 출력

// foreach ($arr as $key => $val) {
//     echo $key." > ".$val."\n";
// }

// for ($i=0; $i < count($arr); $i++) { 
//     echo $i." > ".$arr[$i]."\n";
// }

// $arr의 값을 숫자가 작은 것부터 큰 순서대로 정렬하는 함수 만들기

// $temp = $arr[0];
// $arr[0] = $arr[1];
// $arr[1] = $temp;

// print_r($arr);

$arr = array(5, 10, 7, 3, 1);

// for ($ii=1; $ii < count($arr); $ii++) { 
//     for ($i=0; $i < count($arr)-$ii; $i++) { 
//         if($arr[$i]>$arr[$i+1])
//         {
//             $temp = $arr[$i];
//             $arr[$i] = $arr[$i+1];
//             $arr[$i+1] = $temp;
//         }
//     }
// }

$cnt = count($arr);

// for ($ii=1; $ii < $cnt; $ii++) { 
//     for ($i=$cnt; $i > 1; $i--) { 
//         if($arr[$i-1]<$arr[$i-2])
//         {
//             $temp = $arr[$i-1];
//             $arr[$i-1] = $arr[$i-2];
//             $arr[$i-2] = $temp;
//         }
//     }
// }

for ($ii = 1; $ii < $cnt; $ii++) { 
    for ($i = $cnt; $i > $ii; $i--) { 
        if($arr[$i-1] < $arr[$i-2])
        {
            $temp = $arr[$i-1];
            $arr[$i-1] = $arr[$i-2];
            $arr[$i-2] = $temp;
        }
    }
}

for ($ii = 1; $ii < $cnt; $ii++) { 
    for ($i = $cnt; $i > $ii; $i--) { 
        $x = $cnt-$i;
        if($arr[$x] > $arr[$x+1])
        {
            $temp = $arr[$x];
            $arr[$x] = $arr[$x+1];
            $arr[$x+1] = $temp;
        }
    }
}

print_r($arr);

?>