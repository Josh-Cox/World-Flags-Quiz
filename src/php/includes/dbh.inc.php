<?php

$serverName = "localhost";
$dbUsername = "josh";
$dbPassword = "Tortureme8rhcp";
$dbName = "quiz";
$port = 1433;

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $port);

if (!$conn) {
    die("Connetion failed: " . mysqli_connect_error());
}

?>