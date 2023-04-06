<?php

// ------------------------------
// ※ class CardDeck
// $cards : 키 값에 카드 이름, value 값에 카드 점수를 저장한 배열
// $cards_key : 랜덤하게 뽑은 키 값을 저장하는 멤버변수
// $cards_score : 랜덤하게 뽑은 키 값에 대응하는 점수를 저장하는 멤버변수
// pickcards( &$param_arr, &$param_key, &$param_score ) : 랜덤한 카드를 뽑은 뒤, $param_key에 뽑은 카드 이름, $param_score에 뽑은 카드 점수를 저장하고 $param_arr에서 뽑은 카드 요소 삭제하는 메소드

// ※ class User
// $user_cards : 유저가 뽑은 카드를 배열에 저장
// user_pickcards( &$param_cards, &$param_arr, &$param_key, &$param_score ) : 유저가 랜덤한 카드를 뽑은 뒤, 그 정보를 유저의 카드배열에 저장하고, 뽑은 카드를 덱에서 삭제하는 메소드

// ※ class Dealer
// $dealer_cards : 딜러가 뽑은 카드를 배열에 저장
// dealer_pickcards( &$param_cards, &$param_arr, &$param_key, &$param_score ) : 딜러가 랜덤한 카드를 뽑은 뒤, 그 정보를 유저의 카드배열에 저장하고, 뽑은 카드를 덱에서 삭제하는 메소드
// ------------------------------

class CardDeck
{
    // 카드 52장이 담긴 array
    public $cards = array(
                    "♠A" => 1
                    ,"♠2" => 2
                    ,"♠3" => 3
                    ,"♠4" => 4
                    ,"♠5" => 5
                    ,"♠6" => 6
                    ,"♠7" => 7
                    ,"♠8" => 8
                    ,"♠9" => 9
                    ,"♠10" => 10
                    ,"♠K" => 10
                    ,"♠Q" => 10
                    ,"♠J" => 10

                    ,"♢A" => 1
                    ,"♢2" => 2
                    ,"♢3" => 3
                    ,"♢4" => 4
                    ,"♢5" => 5
                    ,"♢6" => 6
                    ,"♢7" => 7
                    ,"♢8" => 8
                    ,"♢9" => 9
                    ,"♢10" => 10
                    ,"♢K" => 10
                    ,"♢Q" => 10
                    ,"♢J" => 10

                    ,"♣A" => 1
                    ,"♣2" => 2
                    ,"♣3" => 3
                    ,"♣4" => 4
                    ,"♣5" => 5
                    ,"♣6" => 6
                    ,"♣7" => 7
                    ,"♣8" => 8
                    ,"♣9" => 9
                    ,"♣10" => 10
                    ,"♣K" => 10
                    ,"♣Q" => 10
                    ,"♣J" => 10

                    ,"♥A" => 1
                    ,"♥2" => 2
                    ,"♥3" => 3
                    ,"♥4" => 4
                    ,"♥5" => 5
                    ,"♥6" => 6
                    ,"♥7" => 7
                    ,"♥8" => 8
                    ,"♥9" => 9
                    ,"♥10" => 10
                    ,"♥K" => 10
                    ,"♥Q" => 10
                    ,"♥J" => 10
    );
    public $cards_key = null;
    public $cards_score = null;

    public function pickcards( &$param_arr, &$param_key, &$param_score ) // 랜덤한 카드 하나를 뽑는 함수 입니다.
    {
        $param_key = array_rand($param_arr); // array에서 랜덤한 키 값 하나를 변수 $param_key에 저장
        $param_score = $param_arr[$param_key]; // $param_key에 대응하는 점수 값을 변수 $param_score에 저장 
        unset($param_arr[$param_key]); // 위에서 뽑은 카드를 배열에서 삭제합니다.
    }
}

class User extends CardDeck
{
    public $user_cards = array(); // 유저가 뽑은 카드 정보를 배열에 저장합니다.

    public function user_pickcards( &$param_cards, &$param_arr, &$param_key, &$param_score ) // 딜러가 뽑은 카드 정보를 $user_cards 배열에 저장하는 함수입니다.
    {
        parent::pickcards( $param_arr, $param_key, $param_score );
        $param_cards[$param_key] = $param_score;
        unset( $param_arr[$param_key]);
    }
}

class Dealer extends CardDeck
{
    public $dealer_cards = array(); // 딜러가 뽑은 카드 정보를 배열에 저장합니다.

    public function dealer_pickcards( &$param_cards, &$param_arr, &$param_key, &$param_score ) // 딜러가 뽑은 카드 정보를 $user_cards 배열에 저장하는 함수입니다.
    {
        parent::pickcards( $param_arr, $param_key, $param_score );
        $param_cards[$param_key] = $param_score;
        unset( $param_arr[$param_key]);
    }
}

// $obj_carddeck = new CardDeck; // 클래스 CardDeck 불러오기
// $obj_user = new User; // 클래스 User 불러오기
// $obj_dealer = new Dealer; // 클래스 Dealer 불러오기

// 유저가 랜덤하게 카드 하나를 뽑고 그 정보를 유저의 카드 배열에 저장합니다.
// $obj_user->user_pickcards( $obj_user->user_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );

// 딜러가 랜덤하게 카드 하나를 뽑고 그 정보를 딜러의 카드 배열에 저장합니다.
// $obj_dealer->dealer_pickcards( $obj_dealer->dealer_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );

// array_sum( $obj_user->user_cards ); // 유저 점수
// array_sum( $obj_dealer->dealer_cards ); // 딜러 점수

function card_check( $param_arr ) // 현재 카드 덱을 확인하는 함수
{
    $str = null;
    foreach ($param_arr as $key => $val) {
        $str .= " ".$key;
    }
    return $str;
}

?>