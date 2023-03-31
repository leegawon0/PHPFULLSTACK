<?php

// DB 연결
$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );

// print_r($dbc);

// 쿼리
$rslt_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees LIMIT 5;");
// print_r($rslt_query);

// while ($temp_row = mysqli_fetch_row($rslt_query))
// {
//     echo $temp_row[0].", ";
// }

// while ($temp_row = mysqli_fetch_row($rslt_query))
// {
//     print_r($temp_row);
// }

while ($temp_arr = mysqli_fetch_assoc($rslt_query))
{
    print_r($temp_arr);
}

// for ($i=0; $i < 100 ; $i++) { 
//     $rslt_row = mysqli_fetch_row( $rslt_query );
//     print_r($rslt_row);
// }

// DB 연결 종료
mysqli_close($dbc);

?>