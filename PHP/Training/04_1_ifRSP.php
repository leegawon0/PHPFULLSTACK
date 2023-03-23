<?php

// rand(0, 10); : 0부터 10까지 무작위로 숫자를 생성해주는 함수

// 0 : 가위, 1 : 바위, 2 : 보

/*
$rsp = 2;
$vs = rand(0,2);

if ($rsp != 0 && $rsp != 1 && $rsp !=2)
{
    echo "0, 1, 2 중 하나의 값을 입력해 주세요.";
}
else
{
    if ($rsp == 0)
    {
        $you = "가위";
    }
    else if ($rsp == 1)
    {
        $you = "바위";
    }
    else if ($rsp == 2)
    {
        $you = "보";
    }

    if ($vs == 0)
    {
        $comp = "가위";
    }
    else if ($vs == 1)
    {
        $comp = "바위";
    }
    else
    {
        $comp = "보";
    }

    if ($vs == 0 && $rsp == 0)
    {
        $result = "비겼네요? 다시 한 번!";
    }
    else if ($vs == 0 && $rsp == 1)
    {
        $result = "당신이 이겼습니다!";
    }
    else if ($vs == 0 && $rsp == 2)
    {
        $result = "당신이 졌습니다ㅠㅠ";
    }
    else if ($vs == 1 && $rsp == 1)
    {
        $result = "비겼네요? 다시 한 번!";
    }
    else if ($vs == 1 && $rsp == 2)
    {
        $result = "당신이 이겼습니다!";
    }
    else if ($vs == 1 && $rsp == 0)
    {
        $result = "당신이 졌습니다ㅠㅠ";
    }
    else if ($vs == 2 && $rsp == 2)
    {
        $result = "비겼네요? 다시 한 번!";
    }
    else if ($vs == 2 && $rsp == 0)
    {
        $result = "당신이 이겼습니다!";
    }
    else if ($vs == 2 && $rsp == 1)
    {
        $result = "당신이 졌습니다ㅠㅠ";
    }
    echo "당신 : ".$you.", 컴퓨터 : ".$comp."\n\n".$result;
}
*/

$rsp = 2;
$vs = rand(0,2);

if ($rsp != 0 && $rsp != 1 && $rsp !=2)
{
    echo "0, 1, 2 중 하나의 값을 입력해 주세요.";
}
else
{
    if ($rsp == 0)
    {
        $you = "가위";
    }
    else if ($rsp == 1)
    {
        $you = "바위";
    }
    else
    {
        $you = "보";
    }

    if ($vs == 0)
    {
        $comp = "가위";
    }
    else if ($vs == 1)
    {
        $comp = "바위";
    }
    else
    {
        $comp = "보";
    }

    if (($vs == 0 && $rsp == 0) || ($vs == 1 && $rsp == 1) || ($vs == 2 && $rsp == 2))
    {
        $result = "비겼네요? 다시 한 번!";
    }
    else if (($vs == 0 && $rsp == 1) || ($vs == 1 && $rsp == 2) || ($vs == 2 && $rsp == 0))
    {
        $result = "당신이 이겼습니다!";
    }
    else
    {
        $result = "당신이 졌습니다...";
    }
    echo "당신 : ".$you." vs 컴퓨터 : ".$comp."\n\n☞ ".$result;
}
?>