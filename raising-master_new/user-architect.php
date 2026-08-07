
<?php
include 'user-side.php';

?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="3.css">
</head>
</html>
<?php
include 'connection.php';  // Ensure you have a database connection

$sql = "SELECT architect_id, name, photo, email ,qualification,experience,phoneno FROM add_architect";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    // Start HTML for the architect cards display
    echo "<div class='architects-container'>";

    while ($row = $result->fetch_assoc()) {
       
         $filename1=$row["photo"];
        $f1="architectphotos/".$filename1;
    
        $architect_id = $row['architect_id'];
        $name = $row['name'];
        
        $email = $row['email'];
        $qualification = $row['qualification'];  
        $experience = $row['experience'];
        $phoneno = $row['phoneno'];

        // Display architect card
        echo "
        <div class='architect-card'>
            <img src='architectphotos/$filename1' alt='$name' class='architect-image'>
             
            <div class='architect-info'>
                <h3>$name</h3>
           
                <p><strong>Email:</strong> $email</p>
                <p><strong>Qualification:</strong> $qualification</p>
                <p><strong>Experience:</strong> $experience</p>
                
                <p><strong>Phone no:</strong> $phoneno</p>
                <a href='book_architect.php?architect_id=$architect_id' class='book-button'>Book Now</a>
            </div>
        </div>
        ";
    }

    echo "</div>";  // Close the container div
} else {
    echo "<p>No architects available.</p>";
}
?>
