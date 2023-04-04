<?php

// 아래 쿼리를 이용해서 DB접속 > data획득 후 출력해 주세요.
// try-catch로 에러 처리를 해 주세요.
// 에러가 날 경우, 해당 Exception의 에러메세지를 출력해 주세요.
// 정상 종료될 경우 "정상종료"라고 출력해 주세요.

include_once("../Example/12_2_fnc_db.php");

$sql1 = " SELECT * FROM department ";
$sql2 = " SELECT * FROM dept_manager ";

try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    // $stmt1 = $obj_conn->query( $sql1 );
    // $result1 = $stmt1->fetchAll();
    $stmt2 = $obj_conn->query( $sql2 );
    $result2 = $stmt2->fetchAll();

    // foreach ($result1 as $val) {
    //     echo $val["dept_no"]." ".$val["dept_name"]."\n";
    // }

    foreach ($result2 as $val) {
        echo $val["dept_no"]." ".$val["emp_no"]." ".$val["from_date"]." ".$val["to_date"]."\n";
    }

    echo "정상종료";
}
catch ( Exception $e )
{
    echo $e->getMessage();
}
finally
{
    $obj_conn = null;
}

?>