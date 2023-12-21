<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "golf_app_db";
$conn = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n". $conn -> error);

?>