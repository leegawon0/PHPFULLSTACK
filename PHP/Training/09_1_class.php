<?php

    // $car_name : 차 이름을 저장하는 멤버변수
    // $car_color : 차 색깔을 저장하는 멤버변수
    
    // method명 : car_make
    // parameter : STRING $param_name, STRING $param_color
    // 기능 : 멤버변수에 값을 셋팅
    
    // method명 : car_out
    // parameter : 없음
    // 기능 : 자동차 이름과 색깔을 출력 (형식 : $car_color."색 ".$car_name)

// Class Car
// {
//     public $car_name;
//     public $car_color;

//     public function car_make($param_name, $param_color)
//     {
//         $this->car_name = $param_name;
//         $this->car_color = $param_color;
//     }

//     public function car_out()
//     {
//         echo $this->car_color."색 ".$this->car_name;
//     }
// }

Class Car
{
    private $car_name;
    private $car_color;

    public function car_make($param_name, $param_color)
    {
        $this->car_name = $param_name;
        $this->car_color = $param_color;
    }

    public function car_out()
    {
        echo $this->car_color."색 ".$this->car_name;
    }
}

$obj_Car = new Car;

$obj_Car->car_make("볼보", "검정");
$obj_Car->car_out();

?>