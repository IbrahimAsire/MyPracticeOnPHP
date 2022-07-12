<?php

$test_val = 1;
$cal_area = area(5, 2) * 2;
echo $cal_area;


function area($x, $y){
    global $test_val;
    $cal_val = ($x + $y) + $test_val;
    return $cal_val;
}

?>