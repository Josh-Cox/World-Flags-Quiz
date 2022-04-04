<?php

$serverName = "localhost";
$dbUsername = "Valix";
$dbPassword = "Slowcheetah7rhcp";
$dbName = "quiz";
$port = 1111;

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $port);

if (!$conn) {
    die("Connetion failed: " . mysqli_connect_error());
}

?>