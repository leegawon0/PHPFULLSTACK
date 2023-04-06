<?php

// preset.php 불러오기
include_once("./preset.php");

// 필요한 Class 불러오기
$obj_carddeck = new CardDeck;
$obj_user = new User;
$obj_dealer = new Dealer;

$flag = false; // $flag에 false 저장, $flag는 게임의 결과가 나왔는지 판별해주는 변수

// 게임 시작
echo "\n********************************************************************************\n";

echo "\n[System] 게임 시작\n";

// user와 dealer에게 카드 2장씩 배부
$obj_user->user_pickcards( $obj_user->user_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );
$obj_user->user_pickcards( $obj_user->user_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );
$obj_dealer->dealer_pickcards( $obj_dealer->dealer_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );
$obj_dealer->dealer_pickcards( $obj_dealer->dealer_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );

$user_score = array_sum( $obj_user->user_cards ); // $user_score에 유저의 현재 점수 저장
$dealer_score = array_sum( $obj_dealer->dealer_cards ); // $dealer_score에 딜러의 현재 점수 저장

// 유저에게 유리하도록 A 카드에 1점 혹은 11점을 부여하는 if문
if( in_array( 1, $obj_user->user_cards ) )
{
    if( $user_score <= 11 )
    {
        $user_score += 10; 
    }
}

// 딜러에게 유리하도록 A 카드에 1점 혹은 11점을 부여하는 if문
if( in_array( 1, $obj_dealer->dealer_cards ) )
{
    if( $dealer_score <= 11 )
    {
        $dealer_score += 10; 
    }
}

// 받은 카드와 현재 점수 확인
echo "\n[System] 카드를 받았습니다.\n";
echo "::: 현재 덱 :".card_check( $obj_user->user_cards )." (".$user_score."점)\n";

if( $user_score === 21 || $dealer_score === 21 ) // 유저 혹은 딜러의 점수가 21점이면 발동하는 if문
{
    if( $user_score === 21 && $dealer_score != 21 ) // 유저의 점수가 21점이고, 딜러의 점수가 21점이 아닐 때
    {
        echo "\n▶ 블랙잭! 당신이 승리했습니다. ◀\n\n";
        echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards )." (".$dealer_score."점)\n";
        $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
    }
    else if( $user_score != 21 && $dealer_score === 21 )
    {
        echo "\n▶ 딜러의 블랙잭! 당신이 패배했습니다... ◀\n\n";
        echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards )." (".$dealer_score."점)\n";
        $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
    }
    else if( $user_score === 21 && $dealer_score === 21 )
    {
        echo "\n▶ 더블 블랙잭! 무승부입니다. ◀\n\n";
        echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards )." (".$dealer_score."점)\n";
        $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
    }
    echo "\n[System] 넘어가려면 아무 글자나 입력하세요.\n> "; // 79번 라인에서 입력값을 받느라 한번 멈추므로 아무 값이나 입력해서 넘어가야함 
}        
else 
{
    echo "\n[System] 게임을 종료하려면 0, 카드를 더 뽑으려면 1, 카드를 비교하려면 2 입력\n> "; // 게임의 결과가 나오지 않았으므로 유저에게 선택지 제공
}

while(true) { // 터미널에서 입력값 받아올 수 있는 while문

    fscanf(STDIN, "%d\n", $input); // 유저로부터 입력값을 받아올 수 있는 함수

	if($input === 0) // $input에 0을 입력했을 때 
    {
		break; // 루프 탈출
	}

    else if($input === 1) // $input에 1을 입력했을 때 카드를 한장 더 뽑는 if문
    {
        if( count( $obj_carddeck->cards ) < 2 ) // 카드덱에 카드가 2장 미만으로 남았을 때 (= 더 이상 카드를 뽑을 수 없을 때) 자동으로 카드를 비교하고 결과 도출
        {
            echo "\n[System] 카드 소진! 게임을 종료합니다.\n";
            echo "\n[System] 카드를 비교합니다.\n";
            echo "::: 당신의 덱 공개 :".card_check( $obj_user->user_cards )." (".$user_score."점)\n";
            echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards )." (".$dealer_score."점)\n";
            if( $user_score > $dealer_score ) // 유저의 점수가 딜러의 점수보다 높을 때
            {
                echo "\n▶ 당신이 승리했습니다! ◀\n\n";
                $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
            }
            else if( $user_score < $dealer_score ) // 유저의 점수가 딜러의 점수보다 낮을 때
            {
                echo "\n▶ 딜러의 승리! 당신이 패배했습니다... ◀\n\n";
                $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
            }
            else if( $user_score === $dealer_score ) // 유저의 점수와 딜러의 점수가 같을 때
            {
                if( count( $obj_user->user_cards ) === count( $obj_dealer->dealer_cards ) ) // 유저와 딜러 모두 21점인데 유저의 카드 수와 딜러의 카드 수가 같을 때
                {
                    echo "\n▶ 무승부입니다. ◀\n\n";
                    $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
                }
                else if( count( $obj_user->user_cards ) > count( $obj_dealer->dealer_cards ) ) // 유저와 딜러 모두 21점인데 유저의 카드 수가 딜러의 카드 수보다 많을 때
                {
                    echo "\n▶ 딜러의 승리! 당신이 패배했습니다... ◀\n\n";
                    $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
                }
            }
            break; // 루프 탈출
        }
        $obj_user->user_pickcards( $obj_user->user_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score ); // 유저가 카드를 1장 더 뽑음
        if( $dealer_score < 17 ) // 딜러의 스코어가 17 미만일 경우
        {
            $obj_dealer->dealer_pickcards( $obj_dealer->dealer_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score ); // 딜러도 카드를 1장 더 뽑음
        }

        $user_score = array_sum( $obj_user->user_cards ); // 카드를 새로 뽑았으므로 $user_score 한번 더 계산
        $dealer_score = array_sum( $obj_dealer->dealer_cards ); // 카드를 새로 뽑았으므로 $dealer_score 한번 더 계산

        // 유저에게 유리하도록 A 카드에 1점 혹은 11점을 부여하는 if문
        if( in_array( 1, $obj_user->user_cards ) )
        {
            if( $user_score <= 11 )
            {
                $user_score += 10; 
            }
        }

        // 유저에게 유리하도록 A 카드에 1점 혹은 11점을 부여하는 if문
        if( in_array( 1, $obj_dealer->dealer_cards ) )
        {
            if( $dealer_score <= 11 )
            {
                $dealer_score += 10; 
            }
        }

        // 받은 카드와 현재 점수 확인
        echo "\n[System] 카드를 받았습니다.\n";
        echo "::: 현재 덱 :".card_check( $obj_user->user_cards )." (".$user_score."점)\n";

        if( $user_score === 21 || $dealer_score === 21 ) // 유저의 점수 혹은 딜러의 점수가 21점일 경우 발동되는 if문
        {
            if( $user_score === 21 && $dealer_score != 21 ) // 유저의 점수가 21점이고 딜러의 점수가 21점이 아닐 때
            {
                echo "\n▶ 블랙잭! 당신이 승리했습니다! ◀\n\n";
                echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards)." (".$dealer_score."점)\n";
                $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
            }
            else if( $user_score != 21 && $dealer_score === 21 ) // 딜러의 점수가 21점이고 유저의 점수가 21점이 아닐 때
            {
                echo "\n▶ 딜러의 블랙잭! 당신이 패배했습니다... ◀\n\n";
                echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards)." (".$dealer_score."점)\n";
                $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
            }
            else
            {
                if( count( $obj_user->user_cards ) === count( $obj_dealer->dealer_cards ) ) // 유저와 딜러 모두 21점인데 유저의 카드 수와 딜러의 카드 수가 같을 때
                {
                    echo "\n▶ 더블 블랙잭! 무승부입니다. ◀\n\n";
                    echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards)." (".$dealer_score."점)\n";
                    $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
                }
                else if( count( $obj_user->user_cards ) > count( $obj_dealer->dealer_cards ) ) // 유저와 딜러 모두 21점인데 유저의 카드 수가 딜러의 카드 수보다 많을 때
                {
                    echo "\n▶ 더블 블랙잭! 카드 수가 적은 딜러의 승리! 당신이 패배했습니다... ◀\n\n";
                    echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards)." (".$dealer_score."점)\n";
                    $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
                }
            }
        }
        else if( $user_score > 21 || $dealer_score > 21 ) // 유저의 점수 혹은 딜러의 점수가 21점을 넘겼을 때 발동하는 if문
        {
            if( $user_score <= 21 && $dealer_score > 21 ) // 유저의 점수는 21점 이하인데 딜러의 점수가 21점을 넘겼을 때
            {
                echo "\n▶ 딜러의 점수 21 초과! 당신이 승리했습니다! ◀\n\n";
                echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards)." (".$dealer_score."점)\n";
                $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
            }
            else
            {
                echo "\n▶ 점수 21 초과! 당신이 패배했습니다... ◀\n\n"; // 유저의 점수는 21점을 넘겼는데 딜러의 점수는 21점 이하일 때
                echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards)." (".$dealer_score."점)\n";
                $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
            }
        }
    }
    
    else if($input === 2) // $input에 2를 입력했을 때 유저와 딜러의 카드를 비교하는 if문
    {
        echo "\n[System] 카드를 비교합니다.\n";
        echo "::: 당신의 덱 공개 :".card_check( $obj_user->user_cards )." (".$user_score."점)\n";
        echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards )." (".$dealer_score."점)\n";
        if( $user_score > $dealer_score ) // 유저의 점수가 딜러의 점수보다 높을 때
        {
            echo "\n▶ 당신이 승리했습니다! ◀\n\n";
            $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
        }
        else if( $user_score < $dealer_score ) // 딜러의 점수가 유저의 점수보다 높을 때
        {
            echo "\n▶ 딜러의 승리! 당신이 패배했습니다... ◀\n\n";
            $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
        }
        else
        {
            if( count( $obj_user->user_cards ) === count( $obj_dealer->dealer_cards ) ) // 유저의 점수와 딜러의 점수가 같은데 유저의 카드 수와 딜러의 카드 수가 같을 때
            {
                echo "\n▶ 무승부입니다. ◀\n\n";
                $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
            }
            else if( count( $obj_user->user_cards ) > count( $obj_dealer->dealer_cards ) ) // 유저의 점수와 딜러의 점수가 같은데 유저의 카드 수가 딜러의 카드 수보다 많을 때
            {
                echo "\n▶ 딜러의 승리! 당신이 패배했습니다... ◀\n\n";
                $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
            }
        }
    }
    
    if( $flag === false ) // $flag가 false일 때 (= 아직 게임의 결과가 나오지 않았을 때)
    {
        echo "\n[System] 게임을 종료하려면 0, 카드를 더 뽑으려면 1, 카드를 비교하려면 2 입력\n> "; // 앞의 문구를 출력하고 다시 처음으로 돌아가 반복
    }
    else if ( $flag === true ) // $flag가 true일 때 (= 게임의 결과가 나왔을 때)
    {
        echo "::: 남은 카드 수 : ".count( $obj_carddeck->cards )."\n"; // 남은 카드 수 출력
        if( count( $obj_carddeck->cards ) < 4 ) // 카드덱에 카드가 4장 이하로 남았을 때
        {
            echo "\n[System] 카드 소진! 게임을 종료합니다.\n";
            break; // 루프 탈출
        }

        echo "\n[System] 게임을 종료하려면 0, 게임을 이어나가려면 3 입력\n> ";

        fscanf(STDIN, "%d\n", $input); // $input에 유저의 입력값 저장
        if($input === 0) // $input에 0을 입력했을 때
        {
            break; // 루프 탈출
        }
        if($input === 3) // $input에 3을 입력했을 때
        {
            $obj_user->user_cards = []; // 유저의 카드덱 비우기
            $obj_dealer->dealer_cards = []; // 딜러의 카드덱 비우기
            $flag = false; // 게임이 다시 시작되므로 $flag 값에 다시 false 값 저장
        
            // 이하는 루프 밖의 코드 반복
            
            echo "\n********************************************************************************\n";

            echo "\n[System] 게임 시작\n";

            // user와 dealer에게 카드 2장씩 배부
            $obj_user->user_pickcards( $obj_user->user_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );
            $obj_user->user_pickcards( $obj_user->user_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );
            $obj_dealer->dealer_pickcards( $obj_dealer->dealer_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );
            $obj_dealer->dealer_pickcards( $obj_dealer->dealer_cards, $obj_carddeck->cards, $obj_carddeck->cards_key, $obj_carddeck->cards_score );

            $user_score = array_sum( $obj_user->user_cards ); // $user_score에 유저의 현재 점수 저장
            $dealer_score = array_sum( $obj_dealer->dealer_cards ); // $dealer_score에 딜러의 현재 점수 저장

            // 유저에게 유리하도록 A 카드에 1점 혹은 11점을 부여하는 if문
            if( in_array( 1, $obj_user->user_cards ) )
            {
                if( $user_score <= 11 )
                {
                    $user_score += 10; 
                }
            }

            // 딜러에게 유리하도록 A 카드에 1점 혹은 11점을 부여하는 if문
            if( in_array( 1, $obj_dealer->dealer_cards ) )
            {
                if( $dealer_score <= 11 )
                {
                    $dealer_score += 10; 
                }
            }

            // 받은 카드와 현재 점수 확인
            echo "\n[System] 카드를 받았습니다.\n";
            echo "::: 현재 덱 :".card_check( $obj_user->user_cards )." (".$user_score."점)\n";

            if( $user_score === 21 || $dealer_score === 21 ) // 유저 혹은 딜러의 점수가 21점이면 발동하는 if문
            {
                if( $user_score === 21 && $dealer_score != 21 ) // 유저의 점수가 21점이고, 딜러의 점수가 21점이 아닐 때
                {
                    echo "\n▶ 블랙잭! 당신이 승리했습니다. ◀\n\n";
                    echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards )." (".$dealer_score."점)\n";
                    $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
                }
                else if( $user_score != 21 && $dealer_score === 21 )
                {
                    echo "\n▶ 딜러의 블랙잭! 당신이 패배했습니다... ◀\n\n";
                    echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards )." (".$dealer_score."점)\n";
                    $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
                }
                else if( $user_score === 21 && $dealer_score === 21 )
                {
                    echo "\n▶ 더블 블랙잭! 무승부입니다. ◀\n\n";
                    echo "::: 딜러의 덱 공개 :".card_check( $obj_dealer->dealer_cards )." (".$dealer_score."점)\n";
                    $flag = true; // 게임의 결과가 나왔으므로 $flag에 true 값 저장
                }
                echo "\n[System] 넘어가려면 아무 글자나 입력하세요.\n> "; // 79번 라인에서 입력값을 받느라 한번 멈추므로 아무 값이나 입력해서 넘어가야함 
            }        
            else 
            {
                echo "\n[System] 게임을 종료하려면 0, 카드를 더 뽑으려면 1, 카드를 비교하려면 2 입력\n> "; // 게임의 결과가 나오지 않았으므로 유저에게 선택지 제공
            }
        }
    }
}

echo "\n[System] 게임이 끝났습니다.\n\n";

?>