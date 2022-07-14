<?php
$nameArr = array('Ibrahim', 'Ahmed', 'Fahd', 'Khaled', 'Moh', 'Abdu');
$numArr = array(23, 25, 22, 1, 6, 8, 7, 23, 17, 7, 6, 23, 7);

$agesArr = array(
    'Ibra' => 23,
    'Fahd' => 24,
    'Ahmed' => 37,
    'Moh' => 33
);

echo count($nameArr); //to count the number of items in the set
echo '<br>' ; 
echo array_sum($numArr) ; //to sum the numbers of array
echo '<br>';
// calculate how many times the element is repeated
echo '<pre>'; print_r(array_count_values($numArr)); echo '</pre>';
echo '<br>';


array_push($nameArr, 'Mute');
echo '<pre>'; print_r(array_count_values($nameArr)); echo '</pre>';
array_pop($nameArr);
echo '<pre>'; print_r(array_count_values($nameArr)); echo '</pre>';








?>