<?php
include 'admin-side.php';
include 'connection.php';
?>
<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="2.css">
  </body>
<?php
$sql = "select * from designtype_details";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table  border='10' cellspacing='2' cellpadding='10' border='10'>
    <tr>
            <th>designtype_id</th>
            <th>designtype</th>
 </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $designtype_id=$row['designtype_id'];
        echo "<tr>
            <td>{$row['designtype_id']}</td>
            <td>{$row['designtype']}</td>
      </tr>";
    }
    ?>
<?php
    echo "</table>";
} else {
    echo "0 results";
}
?>