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




?>