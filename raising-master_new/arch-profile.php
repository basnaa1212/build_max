<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="arch-profile.css">
  </body>
  </html>
<?php
include 'arch-side.php';
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
$sql = "SELECT name, photo, email, address, phoneno, qualification, qualificationcertificate, experience 
        FROM add_architect WHERE email = '$p'"; // Replace with appropriate condition
$result = $conn->query($sql);

// Check if there's a result
if ($result->num_rows > 0) {
    // Output the data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='profile-info'>";  // Profile container

        // Display name
        echo "<h2>" . htmlspecialchars($row["name"]) . "</h2>";

        // Display photo if available
        $filename1 = $row["photo"];
       // echo $filename1;
        $f1 = "architectphotos/".$filename1;
       // if (file_exists($f1)) {
            echo "<p><strong>Profile Photo:</strong><br><img src='$f1' class='architect-image' alt='Profile Photo'></p>";
    
  //      } else {
    //      echo "<p><strong>Profile Photo:</strong> Not available</p>";
      //  }
       

        // Display email
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row["email"]) . "</p>";

        // Display address
        echo "<p><strong>Address:</strong> " . htmlspecialchars($row["address"]) . "</p>";

        // Display phone number
        echo "<p><strong>Phone No:</strong> " . htmlspecialchars($row["phoneno"]) . "</p>";

        // Display qualification
        echo "<p><strong>Qualification:</strong> " . htmlspecialchars($row["qualification"]) . "</p>";

        // Display qualification certificate
       // echo "<p><strong>Qualification Certificate:</strong> " . htmlspecialchars($row["qualificationcertificate"]) . "</p>";

        // Display qualification certificate image if available
       $filename = $row["qualificationcertificate"];
        //echo $filename;
        $f = "qualificationimages/" . $filename;
       if (file_exists($f)) {
            echo "<p><strong>Qualification Certificate Image:</strong><br><img src='qualificationimages/$filename' class='architect-image' alt='Qualification Certificate'></p>";
        } else {
            echo "<p><strong>Qualification Certificate Image:</strong> Not available</p>";
        }

        // Display experience
        echo "<p><strong>Experience:</strong> " . htmlspecialchars($row["experience"]) . "</p>";

        // Update button
        echo "<p><a href='arch-profile2.php' class='update-button'>Update</a></p>";

        echo "</div>";  // Closing profile container
    }
} else {
    echo "<p>No profile found.</p>";
}

$conn->close();
?>

