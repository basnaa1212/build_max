<?php
include 'user-side.php';
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buildmax";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch profile data
$p = $_SESSION["username"];
$sql = "SELECT  * FROM user_details WHERE email = '$p'"; // Replace with appropriate condition
$result = $conn->query($sql);

// Check if there's a result
if ($result->num_rows > 0) {
    // Output the data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='profile-info'>";  // Profile container

        // Display name
        echo "<h2>" . htmlspecialchars($row["name"]) . "</h2>";

       
        // Display email
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row["email"]) . "</p>";

        // Display phone number
        echo "<p><strong>Phone No:</strong> " . htmlspecialchars($row["phoneno"]) . "</p>";

        // Display address
        echo "<p><strong>Address:</strong> " . htmlspecialchars($row["address"]) . "</p>";

        
        // Update button
        echo "<p><a href='update-user-profile.php' class='update-button'>Update</a></p>";

        echo "</div>";  // Closing profile container
    }
} else {
    echo "<p>No profile found.</p>";
}

$conn->close();
?>

<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="user-profile.css">
  </body>
  </html>

