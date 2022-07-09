<?php

echo "<h2>ASU</h2>";

for($i=0; $i <= 10; $i++){
    echo $i. "<br>";
}

echo "<h2>ASD</h2>";
$j = 10;
while($j >= 1){
    echo $j. "<br>";
    $j--;
}

echo "<h3>1.2.3: </h3>";

for($x=1; $x <= 3; $x++){
    echo $x. "<br>";
    for($y=1; $y <=3; $y++){
        echo " ".  $x. ".". $y. "<br>";
        for($z=1; $z <=3; $z++){
            echo " ".  $x. "-". $y. "-". $z. "<br>";
        }
    }
}



?>