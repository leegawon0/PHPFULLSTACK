<?php

class People
{
    protected $name;

    public function set_name( $param_name )
    {
        $this->name = $param_name;
    }

    public function people_print()
    {
        echo "이름 : ".$this->name;
    }
}

class Student extends People
{
    protected $id;

    public function set_id( $param_id )
    {
        $this->id = $param_id;
    }

    public function student_print()
    {
        parent::people_print();
        echo "\nID : ".$this->id;
    }

    // public function test()
    // {
    //     echo "\n".$this->name;
    // }
}

$obj_student = new Student;

$obj_student->set_name( "이가원" );
$obj_student->set_id( "S00001" );
$obj_student->student_print();

// $obj_student->test();

?>