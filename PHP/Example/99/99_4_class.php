<?php

class Food
{
    // 접근 제어 지시자 : public, private, protected
    // public // 어디서든(class 밖에서도) 접근이 가능
    // private // 해당 class 내에서만 접근 가능
    // protected // 해당 class와 상속 class 내에서 접근 가능

    // 멤버 변수
    protected $str_name;
    protected $int_price;

    // 메소드
    public function __construct( $param_name, $param_price )
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    }

    public function fnc_print_food()
    {
        echo $this->str_name." : ".$this->int_price."원\n";
    }

    public function fnc_alter_price( $param_price ) // 추가한 함수
    {
        $this->int_price = $param_price;
    }
}

$obj_food = new Food( "탕수육", 10000 );

// $obj_food->fnc_print_food();

// 멤버 변수 $int_price의 값을 12000으로 바꾸어 주세요.

$obj_food->fnc_alter_price( 12000 );
// $obj_food->fnc_print_food();

// 상속 : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용할 수 있다.
class KoreanFood extends Food
{
    protected $side_dish;
    
    public function __construct( $param_name, $param_price, $param_side_dish )
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
        $this->side_dish = $param_side_dish;
    }

    // 오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의
    public function fnc_print_food()
    {
        // echo $this->str_name." : ".$this->int_price."원\n반찬 : ".$this->side_dish."\n";
        parent::fnc_print_food();
        $str = "반찬 : ".$this->side_dish."\n";
        echo $str;
    }
}

$obj_koreanfood = new KoreanFood( "치킨", 20000, "치킨무" );
$obj_koreanfood->fnc_print_food();

?>