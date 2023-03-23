<?php

$score = 1;
switch ($score)
{
    case $score < 0 || $score > 100:
        echo "잘못된 값을 입력 했습니다.";
        break;
    default:
    switch ($score)
    {
        case 100:
            $grade = "A+";
            break;
        case $score >= 90:
            $grade = "A";
            break;
        case $score >= 80:
            $grade = "B";
            break;
        case $score >= 70:
            $grade = "C";
            break;
        case $score >= 60:
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }
        echo "당신의 점수는 ".$score."점 입니다. <".$grade.">";
        break;
}

?>