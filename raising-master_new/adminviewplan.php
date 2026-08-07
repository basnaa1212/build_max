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
               
              <a href='adminviewplan2.php?architect_id=$architect_id' class='book-button'>view plan</a>
              
              <a href='adminviewdesign2.php?architect_id=$architect_id' class='book-button'>view design</a>

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
/*include 'admin-side.php';
include 'connection.php';
?>
<?php
$sql = "select p.plan_id,t.plantype,p.plandescription,p.image,s.name from plan_details p inner join plantype_details t on t.plantype_id=p.plantype_id inner join add_architect s on s.email=p.email  ";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table  border='5' cellspacing='2' cellpadding='50' border='5'>
    <tr>
            <th>name</th>
            <th>plan_id</th>
            <th>plantype</th>
            
            <th>plandescription</th>
            <th>image</th> 
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $filename=$row["image"];
        $f="planimages/".$filename;
      //  echo $f;
        $plan_id=$row['plan_id'];
        echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['plan_id']}</td>
            <td>{$row['plantype']}</td>
            <td>{$row['plandescription']}</td>";?>
            <td><img width=100 height=100 src="<?php echo $f; ?>"></td>
      </tr><?php
    } 
    ?>
<?php
    echo "</table>";
} else {
    echo "0 results";
}
?>*/
