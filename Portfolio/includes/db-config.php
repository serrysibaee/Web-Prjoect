<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "cvmade";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);
if (!$conn) {
    # code...
    die("connection failed : " . mysqli_connect_error());
}
