<?php
include 'connection.php';
include 'admin-side.php';
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="2.css">
</head>
</html>

<?php
//$e=$_SESSION["email"];
//echo $e;
$a=$_GET['architect_id'];
echo $a;
$sql = "select s.name,a.assignedto,a.startingdate,a.endingdate,a.status from arch_schedule a inner join add_architect s on s.email=a.email where s.architect_id=$a";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
   echo "<table  border='5' cellspacing='2' cellpadding='5' border='5'>
    <tr>
            
            <th>name</th>
            <th>Assigned To</th>
            <th>Starting Date</th>
            
            <th>Ending Date</th>
            <th>Status</th> 
            
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
       
        
        echo "<tr>
            
            <td>{$row['name']}</td>
            <td>{$row['assignedto']}</td>
            <td>{$row['startingdate']}</td>
            <td>{$row['endingdate']}</td>
     <td>{$row['status']}</td></tr>";
    } 
    ?>
<?php
    echo "</table>";
} else {
    //echo "0 results";
    echo "unscheduled";
}
?>