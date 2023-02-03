<!-- Here should be I understand everything about the session  -->
<?php
session_start();

$_SESSION['userName'] = "Ibrahim";
$_SESSION['userID'] = "1212";

echo "Welcome, ". $_SESSION['userName']. "<br>". "Your ID is: ". $_SESSION['userID'];

?>