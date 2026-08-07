<?php
include 'admin-side.php';
include 'connection.php';
?>
<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="2.css">
  </body>
  </html>

<?php
$sql = "select * from user_details";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table  border='5' cellspacing='10' cellpadding='10' border='5'>
    <tr>
            <th>userid</th>
            <th>name</th>
            <th>email</th>
            
            <th>phoneno</th>
            <th>address</th> 
             
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        
        $userid=$row['userid'];
        echo "<tr>
            <td>{$row['userid']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            
            <td>{$row['phoneno']}</td>
            <td>{$row['address']}</td>
            
        </tr>";

    }
    ?>
<?php
    echo "</table>";
} else {
    echo "0 results";
}
?>