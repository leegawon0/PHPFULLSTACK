<?php

// CLASS : 비슷한  함수들이 모여있는 집합

class Student
{
    // 접근제어 지시자 : public, private, protected
    public $std_name; // 어디서든 접근 가능
    private $std_id; // Student Class 내에서만 접근 가능
    protected $std_age; // 상속 Class 내에서만 접근 가능
    // $std_name, $std_id, $std_age : 클래스 멤버 변수

    // Class 안에 있는 function을 method라고 부릅니다.
    public function print_std( $param_std_name, $param_std_age )
    {
        $result_name = "이름 : ".$param_std_name;
        $result_age = "나이 : ".$param_std_age."세";
        echo $result_name;
        echo "\n";
        echo $result_age;
    }

    // private 객체를 사용할 수 있는 방법
    public function set_std_id($param_id)
    {
        // this 포인터 : class 자기 자신을 가르키고 있음
        $this->std_id = $param_id;
    }
    public function get_std_id()
    {
        return $this->std_id;
    }
}

// class를 선언
$obj_Student = new Student;

// class의 method를 호출
// $obj_Student->print_std("이가원", 26);

// class 멤버변수 사용방법
$obj_Student->std_name = "갑돌이";
echo $obj_Student->std_name;

echo "\n";

// 지시자가 private이기 때문에 접근권한이 없다.
// $obj_Student->$std_id = "갑순이";
// 지시자가 protected이기 때문에 접근권한이 없다.
// $obj_Student->$std_age = 26;

// getter, setter로 private 객체에 접근
$obj_Student->set_std_id("갑순이id");
echo $obj_Student->get_std_id();

?>