<?php

$arr = array(5, 10, 7, 3, 1);
$cnt = count($arr);


for ($i=1; $i <= $cnt; $i++) { 
    echo $i." => ".max($arr)."\n";
    unset($arr[array_search(max($arr), $arr)]);
}

?>