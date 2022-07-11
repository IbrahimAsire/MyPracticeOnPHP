<?php
// Multidimentional Array

$product1 = array("Ford", 20, 6);
$product2 = array("Mazda", 15, 10);
$product3 = array("Nissan", 10, 9);

$stock = array(
    array("Ford", 20, 6),
    array("Mazda", 15, 10),
    array("Nissan", 10, 9),
);

echo "<pre>"; print_r($product1);

print_r($stock[0][1]);

$keys = array_keys($stock);
for($i = 0; $i < count($stock); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($stock[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}



?>