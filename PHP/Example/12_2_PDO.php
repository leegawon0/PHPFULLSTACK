<?php

$db_host        = "localhost"; // 원래는 아이피 주소가 들어감
$db_user        = "root";
$db_password    = "root506";
$db_name        = "employees";
$db_charset     = "utf8mb4";
$db_dns         = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
$db_option      = 
    array(
        PDO::ATTR_EMULATE_PREPARES      => false // DB의 Prepared Statement 기능을 사용하도록 설정
        ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throw하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC // 연상배열로 Fetch하도록 설정
    );

// PDO Class로 DB 연동
$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );

// SELECT 예제 : 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요.
// $sql = 
//     // "SELECT s.salary, s.emp_no, e.birth_date FROM salaries s INNER JOIN employees e ON s.emp_no = e.emp_no WHERE s.to_date = '9999-01-01' AND (s.emp_no = 10001 OR s.emp_no = 10002)";
//     " SELECT "
//     ." sal.salary "
//     ." ,emp.emp_no "
//     ." ,emp.birth_date "
//     ." FROM "
//     ." employees emp "
//     ." INNER JOIN salaries sal "
//     ."      ON emp.emp_no = sal.emp_no "
//     ." WHERE "
//     ." ( "
//     ."      emp.emp_no = :emp_no1 "
//     ."      OR emp.emp_no = :emp_no2 "
//     ." ) "
//     ." AND sal.to_date >= now() ";

// $arr_prepare = 
//     array(
//         ":emp_no1" => 10001
//         ,":emp_no2" => 10002
//     );

// $stmt = $obj_conn->prepare( $sql ); // Prepare Statement를 생성
// $stmt->execute( $arr_prepare ); // 쿼리 실행
// $result = $stmt->fetchAll(); // 쿼리 결과를 fetch
// // print_r($result);

// foreach( $result as $val )
// {
//     echo $val["emp_no"]." ".$val["salary"]." ".$val["birth_date"]."\n" ;
// }

// INSERT 예제
$sql = 
    " INSERT INTO departments( "
    ."  dept_no "
    ."  ,dept_name "
    ." ) "
    ." VALUES( "
    ."  :dept_no "
    ."  ,:dept_name "
    ." ) ";

$arr_prepare = 
    array(
        ":dept_no" => "d011"
        ,":dept_name" => "PHP풀스택"
    );

$stmt = $obj_conn->prepare( $sql );
$result = $stmt->execute( $arr_prepare );
$obj_conn->commit();
var_dump($result);


$obj_conn = null;

?>