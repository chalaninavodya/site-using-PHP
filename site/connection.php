<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "site";
$port = 3306;

$connection = new mysqli($servername, $username, $password, $db_name, $port);

if ($connection->connect_error) {
    die("Failed to connect: " . $connection->connect_error);
}
?>
