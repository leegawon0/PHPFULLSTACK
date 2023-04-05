<?php

class CardDeck
{
    // 카드 52장이 담긴 array
    public $cards = array(
                    "s_A" => 1
                    ,"s_2" => 2
                    ,"s_3" => 3
                    ,"s_4" => 4
                    ,"s_5" => 5
                    ,"s_6" => 6
                    ,"s_7" => 7
                    ,"s_8" => 8
                    ,"s_9" => 9
                    ,"s_10" => 10
                    ,"s_K" => 10
                    ,"s_Q" => 10
                    ,"s_J" => 10

                    ,"d_A" => 1
                    ,"d_2" => 2
                    ,"d_3" => 3
                    ,"d_4" => 4
                    ,"d_5" => 5
                    ,"d_6" => 6
                    ,"d_7" => 7
                    ,"d_8" => 8
                    ,"d_9" => 9
                    ,"d_10" => 10
                    ,"d_K" => 10
                    ,"d_Q" => 10
                    ,"d_J" => 10

                    ,"c_A" => 1
                    ,"c_2" => 2
                    ,"c_3" => 3
                    ,"c_4" => 4
                    ,"c_5" => 5
                    ,"c_6" => 6
                    ,"c_7" => 7
                    ,"c_8" => 8
                    ,"c_9" => 9
                    ,"c_10" => 10
                    ,"c_K" => 10
                    ,"c_Q" => 10
                    ,"c_J" => 10

                    ,"h_A" => 1
                    ,"h_2" => 2
                    ,"h_3" => 3
                    ,"h_4" => 4
                    ,"h_5" => 5
                    ,"h_6" => 6
                    ,"h_7" => 7
                    ,"h_8" => 8
                    ,"h_9" => 9
                    ,"h_10" => 10
                    ,"h_K" => 10
                    ,"h_Q" => 10
                    ,"h_J" => 10
    );
    public $cards_key = null;
    public $cards_score = null;

    public function pickcards( &$param_arr, &$param_key, &$param_score ) // 랜덤한 카드 하나를 뽑는 함수 입니다.
    {
        $param_key = array_rand($param_arr); // array에서 랜덤한 키 값 하나를 변수 $cards_key에 저장
        $param_score = $param_arr[$param_key]; // $cards_key에 대응하는 점수값을 변수 $cards_score에 저장 
        unset($param_arr[$param_key]); // 위에서 뽑은 카드를 배열에서 삭제합니다.
    }

}

$obj_carddeck = new CardDeck;

$obj_carddeck->pickcards( $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );

echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";
echo "\n";

$obj_carddeck->pickcards( $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );

echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";
echo "\n";

$obj_carddeck->pickcards( $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );

echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";
echo "\n";

$obj_carddeck->pickcards( $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );

echo "뽑은 카드 이름 : ".$obj_carddeck->cards_key."\n";
echo "뽑은 카드 점수 : ".$obj_carddeck->cards_score."\n";
echo "남은 카드 개수 : ".count( $obj_carddeck->cards )."\n";
echo "\n";

?>