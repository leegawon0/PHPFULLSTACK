<?php

// try-catch문 : 에러처리를 하기 위한 문법, 에러 문구가 웹사이트에서 그대로 보일 경우 보안상의 문제가 생길 수 있기 때문에 화면단에서 에러문구를 감추기 위해 작성
// try
// {
//     // 우리가 실행하고 싶은 소스코드를 작성
// }
// catch ( Exception $e )
// {
//     // 에러가 발생 했을 때 실행되는 소스코드 작성, fatal error를 감지
// }
// finally
// {
//     // 정상처리 또는 에러처리 시 무조건 실행되는 소스코드 작성
// }

include_once("./12_2_fnc_db.php");

try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql = " SELECT * FROM employees WHERE emp_no = 0 ";
    $stmt = $obj_conn->query( $sql );
    $result = $stmt->fetchAll();

    if( count( $result ) === 0 )
    {
        // throw Exception : 에러를 강제로 일으키는 구문
        throw new Exception("E99");
    }

    print_r( $result );
    echo "-----Try-----\n";
}
catch ( Exception $e )
{
    echo "-----에러 발생-----\n";
    if($e->getMessage() === "E99" )
    {
        echo "데이터 0건\n";
    }
    else
    {
        echo $e->getMessage(); // try-catch 사용하면서 에러 문구 보고싶을 때 사용
    }
}
finally
{
    echo "-----Finally-----\n";
    $obj_conn = null;
}

echo "-----종료-----";

?>