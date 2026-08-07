<?php
include "connection.php";
//include "admin-side.php";

$servername = "localhost";
$username = "root";
$password = "";
$buildmax = "buildmax"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $buildmax);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
