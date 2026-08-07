<?php
include 'user-side.php';
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
$e=$_SESSION["email"];
$sql = "select  p.plan_id,t.plantype,p.plandescription,p.image,p.budget,s.name from plan_details p inner join plantype_details t on t.plantype_id=p.plantype_id inner join add_architect s on s.email=p.email where s.email='$e'";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table  border='5' cellspacing='2' cellpadding='50' border='5'>
    <tr>
            <th>name</th>
            <th>plan_id</th>
            <th>plantype</th>
            
            <th>plandescription</th>
            <th>image</th> 
            <th>Budget sqrtft</th> 
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $filename3=$row["image"];
        $f3="planimages/".$filename3;
      //  echo $f;
        $plan_id=$row['plan_id'];
        echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['plan_id']}</td>
            <td>{$row['plantype']}</td>
            <td>{$row['plandescription']}</td>";?>
            <td><img width=100 height=100 src="<?php echo $f3; ?>"></td>
      <?php
    echo "  <td>{$row['budget']}</td></tr>";
    } 
    ?>
<?php
    echo "</table>";
} else {
    echo "0 results";
}
?>