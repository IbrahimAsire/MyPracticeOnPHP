<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operate'];

echo $operation. "<br>";

if($operation == 'sum'){
    $cal_values = $num1 + $num2;
} else if($operation == 'sub'){
    $cal_values = $num1 - $num2;
} else if($operation == 'multip'){
    $cal_values = $num1 * $num2;
} else{
    $cal_values = $num1 / $num2;
}

echo $cal_values;

?>