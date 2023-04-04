<?php

// $arr_test =
//     array(
//         "a"     => 1
//         ,"b"    => 2
//         ,"info" =>
//                 array(
//                     "info_a"    => 3
//                     ,"info_b"   => 4
//                     ,"info_arr" =>
//                         array(
//                             "f_1"   => 5
//                             ,"f_2"  => 7
//                         )
//                 )
//     );

// echo $arr_test["info"]["info_a"].", ".$arr_test["info"]["info_arr"]["f_2"];

$arr_test =
    array(
        1
        ,2
        ,array(
            "info_a"    => 3
            ,"info_b"   => 4
            ,"info_arr" =>
                array(
                "f_1"   => 5
                ,"f_2"  => 7
                )
        )
    );

echo $arr_test[2]["info_arr"]["f_1"];

?>