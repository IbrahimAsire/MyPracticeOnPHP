<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'learnphp';

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if(!$connection) {
    die('connection falied');
}

mysqli_connect($connection, "INSERT INTO `category` (id, catname, logo, valid) VALUE (NULL, 'TEST', NULL, '1')");

echo "Connection success";
?>