<?php

// 음식 종류 5개 이상을 배열로 만들어 주세요.

// $food = array("치킨", "떡볶이", "쌀국수", "탕후루", "젤리");
// echo $food[2];

// array $food에서 무작위로 값을 출력해주세요.
// $rand_num = rand(0,4);
// echo $food[$rand_num];

// 키는 요리명, 값은 주재료 하나로 이루어진 배열을 만들어 주세요. (4)
// $food = array(
//                 "떡볶이" => "떡"
//                 , "라면" => "면"
//                 , "김밥" => "김"
//                 , "비빔만두" => "만두"
// );
// echo $food["김밥"];

// 키: 라면 원소를 삭제해 주세요
// $arr_food_del = array(
//     "떡볶이" => "떡"
//     , "라면" => "면"
//     , "김밥" => "김"
//     , "비빔만두" => "만두"
// );
// unset($arr_food_del["라면"]);
// print_r ($arr_food_del);

// foreach문을 이용해서 array에서 키가 "삭제"인 요소를 제거해 주세요.
// if문 사용, 키가 "삭제" 이외는 "키 : 값" 포맷으로 출력
$food = array(
                "떡볶이" => "떡"
                , "라면" => "면"
                , "삭제" => "값값"
                , "김밥" => "김"
                , "비빔만두" => "만두"
);

foreach ($food as $key => $val) {
    if ($key == "삭제")
    {
        unset($food[$key]);
    }
    else
    {
        echo $key." : ".$val."\n";
    }
}

print_r($food);

?>