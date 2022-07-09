<?php

$arr = array("Ibrhim", "Ahmed", "Hadi", "Asiri");

for($i=0; $i <=3; $i++){
    echo $arr[$i]. "<br>";
}

echo "<br>--------------------<br>";

for($i=0; $i < count($arr); $i++){
    echo $arr[$i]. "<br>";
}

echo "<br>--------------------<br>";

foreach($arr as $array){
    echo $array. "<br>";
}

echo "<br>--------------------<br>";

echo "<pre>";
print_r($arr);
echo "</pre>"
?>