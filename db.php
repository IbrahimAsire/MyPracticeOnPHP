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
mysqli_query($connection, "INSERT INTO `articles` (`id`, `arttitle`, `logo`, `catid`) VALUES (NULL, 'TEST', NULL, '1')");


echo "Connection success";
?>