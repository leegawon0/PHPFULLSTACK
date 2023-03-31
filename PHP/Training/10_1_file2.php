<?php

// "국밥"과 "크림우동" 사이에 "스테이크"를 추가해주세요.


$f_arr = file("../Example/sam/food.txt");

$print_food = "";

foreach ($f_arr as $val) {
    if (trim($val) ===  "국밥")
    {
        $print_food .= $val."스테이크\n";
    }
    else {
        $print_food .= $val;
    }
}

$f_food = fopen("../Example/sam/food.txt", "r+");

fputs($f_food, $print_food);

fclose($f_food);

?>