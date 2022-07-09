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



?>