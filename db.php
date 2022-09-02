<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'learnphp';

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if(!$connection) {
    die('connection falied');
}

// insert new row into table
mysqli_query($connection, "INSERT INTO `category` (`id`, `catname`, `logo`, `valid`) VALUES (NULL, 'STORE', NULL, '3')");

// update row in table
// mysqli_query($connection, "UPDATE articles SET `arttitle` = 'TEST from php' WHERE `id` = '6'");

// delete row from table
// mysqli_query($connection, "DELETE FROM articles where id = 7");

echo "Connection success";
?>