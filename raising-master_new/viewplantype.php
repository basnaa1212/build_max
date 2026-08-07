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
$sql = "select * from plantype_details";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table  border='10' cellspacing='2' cellpadding='10' border='10'>
    <tr>
            <th>plantype_id</th>
            <th>plantype</th>
 </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $plantype_id=$row['plantype_id'];
        echo "<tr>
            <td>{$row['plantype_id']}</td>
            <td>{$row['plantype']}</td>
      </tr>";
    }
    ?>
<?php
    echo "</table>";
} else {
    echo "0 results";
}
?>