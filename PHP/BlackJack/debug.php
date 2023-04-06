<?php

include_once("./preset.php"); // preset.php에서 클래스, 변수, 함수 불러오기

$obj_user->user_pickcards( $obj_user->user_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score ); // 유저가 랜덤하게 카드 하나를 뽑고 그 정보를 유저의 카드 배열에 저장합니다.
echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";
$obj_user->user_pickcards( $obj_user->user_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score  ); // 유저가 랜덤하게 카드 하나를 뽑고 그 정보를 유저의 카드 배열에 저장합니다.
echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";

$obj_dealer->dealer_pickcards( $obj_dealer->dealer_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score  ); // 딜러가 랜덤하게 카드 하나를 뽑고 그 정보를 딜러의 카드 배열에 저장합니다.
echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";
$obj_dealer->dealer_pickcards( $obj_dealer->dealer_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score  ); // 딜러가 랜덤하게 카드 하나를 뽑고 그 정보를 딜러의 카드 배열에 저장합니다.
echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";

echo "유저 점수 : ".array_sum( $obj_user->user_cards )."\n";
echo "딜러 점수 : ".array_sum( $obj_dealer->dealer_cards )."\n";

// echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
// echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
// echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";

// print_r($obj_user->user_cards);
// print_r($obj_dealer->dealer_cards);
// print_r($obj_carddeck->cards);
// echo "\n";

// 게임 시작

// $flag = false;

// if($flag === false)
// {
//     echo "flag는 false 입니다.";
// }
// else if ($flag === true)
// {
//     echo "flag는 true 입니다.";
// }

// A는 2개째부터는 무조건 1로 계산한다.
// 첫번째 A는 사용자의 점수 합계가 10 이하일 경우엔 11점으로, 10을 초과할 경우엔 1점으로 계산한다.

// ex) 유저가 ♥A를 뽑음   -> ♥A를 제외한 나머지 카드의 점수 합계가 10 이하이면 ♥A는 그대로 11점
//                       -> ♥A를 제외한 나머지 카드의 점수 합계가 10을 초과하면 ♥A는 1점으로 변경

// 그냥 A에 기본 1점을 저장해놓고 상황에 맞게 11점을 적용해 주는게 맞는 것 같다

// A를 1장이라도 가지고 있다면 10점 한번을 내 마음대로 더할 수 있는 찬스가 생기는 것이다.
// 전체 array의 점수 합계가 11점 이하이면 무조건 10점을 한번 더하는 규칙을 추가하면??

$user_score = array_sum( $obj_user->user_cards );
$dealer_score = array_sum( $obj_dealer->dealer_cards );

if(in_array(1, $obj_user->user_cards))
{
    if($user_score <= 11)
    {
        $user_score += 10; 
    }
}

?>