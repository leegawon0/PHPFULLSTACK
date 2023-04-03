<?php

// DB 연결
$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );

// print_r($dbc);

// 쿼리
// $rslt_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 5;");
// print_r($rslt_query);

// while ($temp_row = mysqli_fetch_row($rslt_query))
// {
//     echo $temp_row[0].", ";
// }

// while ($temp_row = mysqli_fetch_row($rslt_query))
// {
//     print_r($temp_row);
// }

// while ($temp_arr = mysqli_fetch_assoc($rslt_query))
// {
//     print_r($temp_arr);
// }

// for ($i=0; $i < 100 ; $i++) { 
//     $rslt_row = mysqli_fetch_row( $rslt_query );
//     print_r($rslt_row);
// }

// prepared Statement : 
$i1 =  "F";
$i2 = 10010;
$i3 = 5;
$stmt = $dbc->stmt_init(); // statement를 셋팅
$stmt->prepare( "SELECT emp_no, gender, first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT ?;"); // DB 질의 할 쿼리를 작성
$stmt->bind_param("sii", $i1, $i2, $i3); // Prepare 셋팅
$stmt->execute(); // DB에 쿼리 질의 실행

// fetch로 가져오는 방법
// $stmt->bind_result( $col1, $col2, $col3 ); // 질의 결과를 각 argument에 저장하기 위한 셋팅
// $stmt->fetch(); // bind_result에 셋팅한 argument에 값을 저장(한번 실행 될때마다 한 레코드씩 저장)
// while($stmt->fetch())
// {
//     echo $col1, " ", $col2, " ", $col3, "\n";
// }

// 이하 연상배열로 가져오는 방법
$result = $stmt->get_result();

// 패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
while($row = $result->fetch_assoc())
{
    echo $row["emp_no"], " ", $row["gender"], " ", $row["first_name"], "\n";
}

// DB 연결 종료
mysqli_close($dbc);

?>