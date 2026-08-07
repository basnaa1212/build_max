
<?php
include 'admin-side.php';
//session_start();
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="3.css">
</head>
</html>
<?php
include 'connection.php';  // Ensure you have a database connection
//$e=$_SESSION["email"];
//echo $e;
//$p=$_SESSION["username"];
$sql = "SELECT architect_id, name, photo, email  FROM add_architect";
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
        //$_SESSION["email"]=$result['email'];
       // $_SESSION["email"]=$row['email'];
        // Display architect card
        echo "
        <div class='architect-card'>
            <img src='architectphotos/$filename1' alt='$name' class='architect-image'>
             
            <div class='architect-info'>
                <h3>$name</h3>
           
                <p><strong>Email:</strong> $email</p>
               
              <a href='adminviewarchschedule.php?architect_id=$architect_id' class='book-button'>view schedule</a>
            </div>
        </div>
        ";
    }

    echo "</div>";  // Close the container div
} else {
    echo "<p>No architects available.</p>";
}
?>

<?php
