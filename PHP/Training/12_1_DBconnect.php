<?php

// 사번이 10005 이하인 사원의 사번, 이름(성 이름), 성별, 생일 출력

$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );

$rslt_query = mysqli_query( $dbc,
    "SELECT emp_no, CONCAT(last_name, ' ', first_name) full_name, gender, birth_date FROM employees WHERE emp_no <= 10005;");

// 1. 플래그 사용

$cnt_flg = false;
while ($temp_arr = mysqli_fetch_assoc($rslt_query))
{
    echo implode(", ", $temp_arr)."\n";
    $cnt_flg = true;
}

if(!$cnt_flg)
{
    echo "데이터가 0건 입니다.";
}

// 2. mysqli_num_rows 사용

// if(mysqli_num_rows($rslt_query) == 0)
// {
//     echo "데이터가 0건 입니다.";
// }

// while ($temp_arr = mysqli_fetch_assoc($rslt_query))
// {
//     echo implode(", ", $temp_arr)."\n";
// }

mysqli_close($dbc);

?>