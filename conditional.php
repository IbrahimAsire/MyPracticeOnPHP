<?php

$x = 18;
$y = 8;

if($x > $y) {
    echo "X Bigger than Y";
} else if($y > $x) {
    echo "The Y is Greater";
} else {
    echo "they are equal ..";
}

echo "<br>-----------------------<br>";

$session1 = 1;
$session2 = 1;
$session3 = 1;
$session4 = 1;
$session5 = 0;
$session6 = 0;

$totalSession = $session1 + $session2 + $session3 + $session4 + $session5 + $session6;

if($totalSession >= 4) {
    echo "you are persented ". $totalSession . ", you are in save area";
}

echo "<br>__________________<br>";
echo "<br>";
$birth_Month = 14;

if($birth_Month == 1 || $birth_Month == 2 || $birth_Month == 3) {
    echo "You are birth in Q1 of year";
} else if($birth_Month == 4 || $birth_Month == 5 || $birth_Month == 6){
    echo "You are birth in Q2 of year";
}  else if($birth_Month == 7 || $birth_Month == 8 || $birth_Month == 9){
    echo "You are birth in Q3 of year";
}  else if($birth_Month == 10 || $birth_Month == 11 || $birth_Month == 12){
    echo "You are birth in Q4 of year";
} else {
    echo "THIS Q not execute";
}




?>