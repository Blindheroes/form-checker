<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himatekkom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully <br>";
session_start();
echo var_dump($_SESSION);
