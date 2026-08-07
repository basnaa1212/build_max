<?php
include 'admin-side.php';
include 'connection.php';
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="2.css">
</head>
</html>
<?php
$sql = "select * from add_architect";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table  border='5' cellspacing='5' cellpadding='5' border='5'>
    <tr>
            <th>architect_id</th>
            <th>name</th>
             <th>photo</th>
            <th>email</th>
            <th>address</th>
            <th>phoneno</th> 
            <th>qualification</th>
            <th>qualificationcertificate</th> 
            <th>experience</th> 
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $filename=$row["qualificationcertificate"];
        $f="qualificationimages/".$filename;
        $filename1=$row["photo"];
        $f1="architectphotos/".$filename1;
    
        $architect_id=$row['architect_id'];
        echo "<tr>
            <td>{$row['architect_id']}</td>
            <td>{$row['name']}</td>";?>
            <td><img width=100 height=100 src="<?php echo $f1; ?>"></td>
        <?php 
         echo "   <td>{$row['email']}</td>
            <td>{$row['address']}</td>
            <td>{$row['phoneno']}</td>
            <td>{$row['qualification']}";?>
            
            <td><img width=100 height=100 src="<?php echo $f; ?>"></td>
      <?php
    
    ?>
          <?php echo " <td>{$row['experience']}</td>
        </tr>";

    }
    ?>
<?php
    echo "</table>";
} else {
    echo "0 results";
}
?>