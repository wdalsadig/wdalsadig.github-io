<?php
$dbPassword = "07775000m";
$dbUserName = "mohammed alsadig";
$dbServer = "localhost";
$dbName = "wd_alsadig";
$movement = "left";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database connection failed. reason: " . $connection->connect_error);
}

$query = "INSERT INTO `move`(`move`)VALUES(\"$movement\")";

//$query = "UPDATE `directions` SET `movement` = \'forward\' WHERE `directions`.`ID` = 5";
$connection->query($query);

$connection->close();
echo "$movement";