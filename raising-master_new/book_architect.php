<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="book_architect.css">
  </body>
  </html>
<?php

include "connection.php";
session_start();
// Assuming the architect ID is passed via URL
$architect_id = $_GET['architect_id'];

// Query the database to get architect details
$sql = "SELECT * FROM add_architect WHERE architect_id = $architect_id";
$result = mysqli_query($con, $sql);
$architect = mysqli_fetch_assoc($result);
/*$sql1 = "SELECT * FROM plan_details WHERE plan_id = $plan_id";
$result1 = mysqli_query($con, $sql1);
$plan = mysqli_fetch_assoc($result1);*/

if ($architect) {
    echo "<h2>Book Architect: {$architect['name']}</h2>";
    
    $filename1=$architect["photo"];
    $f1="architectphotos/".$filename1;
    echo "<img src='architectphotos/$filename1'  class='architect-image'>";

    echo "<p><strong>Email:</strong> {$architect['email']}</p>";
    echo "<p><strong>Address:</strong> {$architect['address']}</p>";
    echo "<p><strong>Contact:</strong> {$architect['phoneno']}</p>";
    echo "<p><strong>Qualification:</strong> {$architect['qualification']}</p>";
    echo "<p><strong>Experience:</strong> {$architect['experience']}</p>";
    $_SESSION["email"]=$architect['email'];
   echo " <br  /><a href='userviewplan.php' class='book-button'>view plan</a> <br  />"; 
   echo " <br  /><a href='userviewdesign.php' class='book-button'>view design</a> <br  />";
    // Booking form (can be extended as needed)
   $p=$_SESSION["username"];
    $n="select name from user_details where email='$p'";
   $result1 = mysqli_query($con, $n);
    
   $u= mysqli_fetch_assoc($result1);

    echo "
    <form  method='POST'>";
       // <input type='hidden' name='architect_id' value='{$architect['architect_id']}'>
      echo "  <label for='name'>Your Name:</label>
        <input type='text' name='name' value='{$u['name']}' required><br><br>
        
        <label for='date'>Preferred Date:</label>
        <input type='date' name='date' required><br><br>

        <label for='message'>Message:</label>
        <textarea name='message' rows='4'></textarea><br><br>

        <input type='submit' name='submit' id='submit' value='Book Now'>
    </form>";
} else {
    echo "<p>Architect not found.</p>";
}
?>
<?php
if(isset($_POST['submit']))	
{ 
    $email=$_POST['name'];
    $e=$_SESSION["email"];
    $preffereddate=$_POST['date'];
    $message=$_POST['message'];
    $s="insert into booking_table(email,preffereddate,message,archemail) values('$p','$preffereddate','$message','$e')";
    $result1=mysqli_query($con,$s);
    if($result1==TRUE)
    {
        echo "inserted";
       echo "<script>location.href = 'userviewbooking.php';</script>";
    }
    else{
       echo"<h1>not inserted.</h1>";
       
    
    }
    
}
?>





