<?php
$dbUser = 'root';
$dbPass = '';  // Leave this empty if no password is set for the root user
$host = 'localhost';
$dbName = 'hmisphp';  // Replace with your actual database name

$mysqli = new mysqli($host, $dbUser, $dbPass, $dbName);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
