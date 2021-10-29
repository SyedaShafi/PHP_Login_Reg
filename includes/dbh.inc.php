<?php

$serverName = "localhost:3307";
$dBUserName = "root";
$dBPass = "root3306";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUserName,$dBPass, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}