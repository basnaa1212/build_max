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
$p=$_SESSION["username"];
$sql = "SELECT name, photo, email, address, phoneno, qualification, qualificationcertificate, experience FROM add_architect WHERE email = '$p'"; // Replace with appropriate condition
$result = $conn->query($sql);

// Check if there's a result
if ($result->num_rows > 0) {
    // Output the data of each row
    while($row = $result->fetch_assoc()) {
       // $filename1=$row["photo"];
        //$f1="architectphotos/".$filename1;
        echo "<h2>" . $row["name"] . "</h2>";
        $filename1=$row["photo"];
        echo $filename1;
        $f1="architectphotos/".$filename1;
        echo "<img src='architectphotos/$filename1'  class='architect-image'>";
        //echo "<img src='" . $row["photo"] . "' alt='Profile Photo' />";
        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
        echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
        echo "<p><strong>Phone No:</strong> " . $row["phoneno"] . "</p>";
        echo "<p><strong>Qualification:</strong> " . $row["qualification"] . "</p>";
        echo "<p><strong>Qualification Certificate:</strong> " . $row["qualificationcertificate"] . "</p>";
        $filename=$row["qualificationcertificate"];
        $f="qualificationimages/".$filename;
        echo "<img src='qualificationimages/$filename'  class='architect-image'>";
    
      //  $filename=$row["qualificationcertificate"];
        //$f="qualificationimages/".$filename;
       
        echo "<p><strong>Experience:</strong> " . $row["experience"] . "</p>";
        echo "<a href='try.php'?class='update-button'>Update</a>";
    }
} else {
    echo "No profile found.";
}

$conn->close();
?>
