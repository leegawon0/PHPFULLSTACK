<?php

/*
If로 만들기
성적 범위 :
100     : A+
90~99   : A
80~90   : B
70~80   : C
60~70   : D
60 미만 : F
출력 문구 : "당신의 점수는 XXX점 입니다. <등급>"
*/

/*
$score = 100;

if($score == 100) {
    echo "당신의 점수는 ".$score."점 입니다. <A+>";
}
else if($score < 100 && $score >= 90) {
    echo "당신의 점수는 ".$score."점 입니다. <A>";
}
else if($score < 90 && $score >= 80) {
    echo "당신의 점수는 ".$score."점 입니다. <B>";
}
else if($score < 80 && $score >= 70) {
    echo "당신의 점수는 ".$score."점 입니다. <C>";
}
else if($score < 70 && $score >= 60) {
    echo "당신의 점수는 ".$score."점 입니다. <D>";
}
else if($score < 60 && $score >= 0) {
    echo "당신의 점수는 ".$score."점 입니다. <F>";
}
*/

/*
$score = 120;

if($score < 0 || $score > 100) {
    $grade = 'X';
}
else if($score == 100) {
    $grade = 'A+';
}
else if($score >= 90) {
    $grade = 'A';
}
else if($score >= 80) {
    $grade = 'B';
}
else if($score >= 70) {
    $grade = 'C';
}
else if($score >= 60) {
    $grade = 'D';
}
else if($score >= 0) {
    $grade = 'F';
}

if($grade = 'X') {
    echo "잘못된 값을 입력 했습니다.";
}
else {
    echo "당신의 점수는 ".$score."점 입니다. <".$grade.">";
}
*/

$score = 85;

if($score < 0 || $score > 100)
{
    echo "잘못된 값을 입력 했습니다.";
}
else
{
    if($score == 100)
    {
        $grade = 'A+';
    }
    else if($score >= 90)
    {
        $grade = 'A';
    }
    else if($score >= 80)
    {
        $grade = 'B';
    }
    else if($score >= 70)
    {
        $grade = 'C';
    }
    else if($score >= 60)
    {
        $grade = 'D';
    }
    else
    {
        $grade = 'F';
    }
    echo "당신의 점수는 ".$score."점 입니다. <".$grade.">";
}

?>