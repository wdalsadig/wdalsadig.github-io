<?php


$dbPassword = "07775000m";
$dbUserName = "mohammed alsadig";
$dbServer = "localhost";
$dbName = "wd_alsadig";
$movement = "backward";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database connection failed. reason: " . $connection->connect_error);
}
$query = "INSERT INTO `move`(`move`)VALUES(\"$movement\")";

$connection->query($query);
$connection->close();
echo "$movement";