<?php
session_start();

$_SESSION['userName'] = "Ibrahim";

echo "Welcome, ". $_SESSION['userName'];



?>