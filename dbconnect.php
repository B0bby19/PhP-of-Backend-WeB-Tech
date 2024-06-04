<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca_third_sem";
$port = 4306;

// create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}