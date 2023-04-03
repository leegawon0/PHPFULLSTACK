<?php

// 우리가 작성한 DB 커넥트 함수(my_db_conn)를 이용해서 아래 데이터를 출력해주세요.

function my_db_conn( &$param_conn )
{
    $db_host        = "localhost";
    $db_user        = "root";
    $db_password    = "root506";
    $db_name        = "employees";
    $db_charset     = "utf8mb4";
    $db_dns         = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $db_option      = 
        array(
            PDO::ATTR_EMULATE_PREPARES      => false
            ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
            ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
        );
    
    //PDO Class로 DB 연동
    $param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
}

$obj_conn = null; // PDO Class

my_db_conn( $obj_conn ); // DB Connect

// 1. 전체 월급의 평균

$sql = 
    " SELECT "
    ." AVG(salary) avg_salary "
    ." FROM "
    ." salaries "
    ;

$stmt = $obj_conn->prepare( $sql );
$stmt->execute();
$result = $stmt->fetchAll();

echo "전체 월급의 평균 : ".$result[0]["avg_salary"];

// 2. 새로운 사원 정보를 employees 테이블에 등록해주세요.

// $sql = 
//     " INSERT INTO employees( "
//     ." emp_no "
//     ." ,birth_date "
//     ." ,first_name "
//     ." ,last_name "
//     ." ,gender "
//     ." ,hire_date "
//     ." ) "
//     ." VALUES( "
//     ." :emp_no "
//     ." ,:birth_date "
//     ." ,:first_name "
//     ." ,:last_name "
//     ." ,:gender "
//     ." ,:hire_date "
//     ." ) "
//     ;

// $arr_prepare = 
//     array(
//         ":emp_no" => "500001"
//         ,":birth_date" => "1998-04-03"
//         ,":first_name" => "Gawon"
//         ,":last_name" => "Lee"
//         ,":gender" => 'F'
//         ,":hire_date" => "2023-04-03"
//     );

// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute( $arr_prepare );
// $obj_conn->commit();

// 3. 2에서 등록산 사원의 이름을 "길동"으로, 성을 "홍"으로 변경해 주세요.

// $sql = 
//     " UPDATE "
//     ." employees "
//     ." SET "
//     ." first_name = :first_name "
//     ." ,last_name = :last_name "
//     ." WHERE "
//     ." emp_no = :emp_no "
//     ;

// $arr_prepare = 
//     array(
//         ":first_name" => "길동"
//         ,":last_name" => "홍"
//         ,":emp_no" => 500001
//     );

// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute( $arr_prepare );
// $obj_conn->commit();

// 4. 2에서 등록한 사원을 삭제해 주세요.

// $sql = 
//     " DELETE "
//     ." FROM "
//     ." employees "
//     ." WHERE "
//     ." emp_no = :emp_no "
//     ;

// $arr_prepare = 
//     array(
//         ":emp_no" => 500001
//     );

// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute( $arr_prepare );
// $obj_conn->commit();

$obj_conn = null;

?>