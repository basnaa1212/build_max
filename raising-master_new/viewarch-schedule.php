<?php
include 'arch-side.php';
include 'connection.php';
session_start();
?>
<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="2.css">
  </body>
  </html>

<?php
$p=$_SESSION["username"];
$sql = "select a.assignedto,a.email,a.startingdate,a.endingdate,a.status from arch_schedule a inner join  add_architect s on s.email=a.email where s.email='$p'";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<form method='post'>";
    echo "<table  border='5' cellspacing='2' cellpadding='50' border='5'>
    
    <tr>
     
            <th>assignedto</th> 
            <th>startingdate</th>
            <th>endingdate</th>
            <th>status</th> 
            <th>updates</th> 
      
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
         
            <td>{$row['assignedto']}</td>
            <td>{$row['startingdate']}</td>
            <td>{$row['endingdate']}</td>
            <td>{$row['status']}</td>

            <td><a href='update-archschedule.php' class='update-button'>Update</a></td>
 
           
    </tr>";
    } 
    ?>
<?php
    echo "</table>";
    echo "</form>";
} else {
    echo "0 results";
}
?>