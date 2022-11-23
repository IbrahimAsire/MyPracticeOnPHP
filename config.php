<!-- should on me review all this again and again and again  -->
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "learnphp";

//stop error
error_reporting(E_ALL ^ E_NOTICE);
// error_reporting(E_All ^ E_DEPRECATED);

//connent MySQL DataBase
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
mysqli_query($connection, "SET character_set_results = 'utf8', character_set_client = 'utf8',
                        character_set_connection = 'utf8', 
                        character_set_database = 'utf8', character_set_server = 'utf8'");

?>