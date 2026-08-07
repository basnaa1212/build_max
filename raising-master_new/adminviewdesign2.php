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
$sql = "select d.design_id,t.designtype,d.description,d.image,d.budget,s.name from design_details d inner join designtype_details t on t.designtype_id=d.designtype_id inner join add_architect s on s.email=d.email where s.architect_id=$a";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
   echo "<table  border='5' cellspacing='2' cellpadding='5' border='5'>
    <tr>
            
            <th>design_id</th>
            <th>name</th>
            <th>designtype</th>
            
            <th>description</th>
            <th>image</th> 
            <th>Budget persqrft</th> 
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $filename4=$row["image"];
        $f4="designimages/".$filename4;
     
        $design_id=$row['design_id'];
        echo "<tr>
            
            <td>{$row['design_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['designtype']}</td>
            <td>{$row['description']}</td>";?>
             <td><img width=100 height=100 src="<?php echo $f4; ?>"></td>
      <?php
     echo " <td>{$row['budget']}</td></tr>";
    } 
    ?>
<?php
    echo "</table>";
} else {
    echo "0 results";
}
?>