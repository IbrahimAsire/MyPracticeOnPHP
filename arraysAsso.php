<?php
// Associative Array

$ages = array(
    'Fahd' => 21,
    'Abdullkareem' => 24,
    'Ruba' => 20
);

foreach($ages as $name => $age){
    echo $name. " has ". $age. " years". "<br>";
}

?>