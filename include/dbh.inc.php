<?php

$servername = "localhost:3308";
$dBUsername = "root";
$dBPassword = "";
$dBName = "librairie";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed ".mysqli_connect_error());
}