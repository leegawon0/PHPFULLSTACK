<?php

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

$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );

// ---------- INSERT ----------

// $sql = 
//     " INSERT INTO departments( "
//     ."  dept_no "
//     ."  ,dept_name "
//     ." ) "
//     ." VALUES( "
//     ."  :dept_no "
//     ."  ,:dept_name "
//     ." ) ";

// $arr_prepare = 
//     array(
//         ":dept_no" => "d011"
//         ,":dept_name" => "PHP풀스택"
//     );

// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute( $arr_prepare );
// $obj_conn->commit();

// ---------- DELETE ----------

// $sql = 
//     " DELETE "
//     ." FROM "
//     ." departments "
//     ." WHERE "
//     ." dept_no = :dept_no "
//     ;

// $arr_prepare = 
//     array(
//         ":dept_no" => "d011"
//     );

// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute( $arr_prepare );
// $obj_conn->commit();

// ---------- SELECT ----------

$sql = 
    " SELECT "
    ." dept_no "
    ." ,dept_name "
    ." FROM "
    ." departments "
    ." ORDER BY dept_no ASC ";

$stmt = $obj_conn->prepare( $sql );
$stmt->execute();
$result = $stmt->fetchAll();

foreach( $result as $val )
{
    echo $val["dept_no"]." ".$val["dept_name"]."\n" ;
}

$obj_conn = null;

?>