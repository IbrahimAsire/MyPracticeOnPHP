<?php
include('config.php');

$sql_statment = mysqli_query($connection, "SELECT * FROM category");
$cat_nums = mysqli_num_rows($sql_statment);

while($row = mysqli_fetch_array($sql_statment)) {
    echo $row['id'] ." - ". $row['catname'] ."<br>";

}


?>