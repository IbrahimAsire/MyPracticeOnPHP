<?php
$db_host = '';
$db_user = '';
$db_pass = '';
$db_name = '';

//stop error
error_reporting(E_All ^ E_NOTICE);
// error_reporting(E_All ^ E_DEPRECATED);

//connent MySQL DataBase
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
mysqli_query($connection, "SET cgaracter_set_result = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8, character_set_server = 'utf8'");

?>