<?php

// 파일을 여는 방법 : fopen( 파일위치, 파일여는방식 )
// $f_food = fopen( "./sam/food.txt", "r" ); // r : 읽기전용
// $f_food = fopen( "./sam/food.txt", "w" ); // w : 쓰기전용 (포인터가 파일 시작부분, 기존 데이터 다 날라감)
$f_food = fopen( "./sam/food.txt", "a" ); // a : 쓰기전용 (포인터가 파일의 끝부분)

// print_r($f_food);

// 파일을 한줄씩 읽어오는 방법 : fgets( open한 파일 )

// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);

// while(!feof($f_food)){
//     print fgets($f_food);
// }

// 파일에 내용 추가 : fputs( open한 파일, 추가할 내용 )
fputs($f_food, "\n돈까스");


// 파일을 닫는 방법 : fclose( open한 파일 )
fclose($f_food);

?>