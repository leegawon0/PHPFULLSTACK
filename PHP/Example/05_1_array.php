<?php

// 배열

// $week = array("Sun", "Mon", "Tue", "Wed");
// print $week[0];

// echo "\n";

// $sun = "Sun";
// $mon = "Mon";
// $tue = "Tue";
// $wed = "Wed";

// $week = array($sun, $mon, $tue, $wed);
// // echo $week[5];

// $week2 = array($week[0], $week[1], $week[2], $week[3]);
// $week2 = array($week[1], $week[3], $week[0], $week[2]);
// echo $week2[3];

// echo "\n\n";

// 멀티타입 배열

// $arr_mult_type = array("aaa", 1, 3.14, "a");
// echo $arr_mult_type[2];

// echo "\n\n"; 

// var_dump($arr_mult_type);

// 연상 배열

// $arr_as = array("key1" => "val1", "key2" => "val2", 0 => "val3");

// echo $arr_as[0];


// 다차원 배열
// $arr_temp = array(
//                     array(1, 2, 3, 4)
//                     , array(5, 6, 7, 8)
//                 );
// echo $arr_temp[0][1];
// echo $arr_temp[1][3];

// $arr_temp = array(
//     array(1, 2, 3, 4)
//     , array(5, 6, 7, 8)
//     , array(
//             array(9, 10, 11)
//         )
//     );

// echo $arr_temp[2][0][1];
// $arr_temp_3 = $arr_temp[2][0];
// var_dump($arr_temp_3);
// echo $arr_temp_3[1];

// $arr_temp_3 = $arr_temp[2];

// $arr_temp_3_c = array(
//                         array(9, 10, 11)
//                     );

// 배열의 원소 삭제 : unset()

// $arr_week = array("Sun", "Mon", "delete", "Tue", "Wed");
// unset($arr_week[2]);
// print_r($arr_week);

// 중복되지 않는 원소를 반환 : array_diff()
// $arr_diff_1 = array("a", "b", "C");
// $arr_diff_2 = array("a", "b", "d");
// $arr_diff = array_diff($arr_diff_1, $arr_diff_2);
// print_r($arr_diff);

// 배열의 정렬 : asort(), arsort(), ksort(), krsort();
// $arr_asort = array("b", "a", "d", "c");
// asort($arr_asort);
// print_r($arr_asort);

// echo "\n";

// arsort($arr_asort);
// print_r($arr_asort);

// echo "\n";

// ksort($arr_asort);
// print_r($arr_asort);

// echo "\n";

// krsort($arr_asort);
// print_r($arr_asort);

// echo "\n";

// array의 사이즈를 반환하는 함수 : count()
// echo count($arr_asort);

// foreach($array as $key => $val){}
// foreach($array as $val){}
$arr1 = array("key1" => "val1", "key2" => "val2", "key3" => "val3", "key4" => "val4");
foreach( $arr1 as $key => $val )
{
    echo $key." : ".$val."\n";
}

echo "\n";

foreach( $arr1 as $val )
{
    echo $val."\n";
}

?>