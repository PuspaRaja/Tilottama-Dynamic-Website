<?php
/* Database credentials */
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'herodb';

/* Attempt to connect to MySQL database */
$link = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$link) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
