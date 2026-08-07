<?php
include 'user-side.php';
include 'connection.php';
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="2.css">
</head>
</html>

<?php
$u=$_SESSION["username"];
//$e=$_SESSION["email"];
$sql = "select b.book_id,b.preffereddate,b.message,b.bookstatus,u.name,b.process_status,s.name as aname from booking_table b inner join user_details u on b.email=u.email inner join add_architect s on s.email=b.archemail  where b.email='$u' ";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
   echo "<table  border='5' cellspacing='2' cellpadding='5' border='5'>
    <tr>
            <th>book_id</th>
            <th>name</th>
            
            <th>preffereddate</th>
            <th>message</th> 
            <th>architect name</th>
            <th>Status</th> 
             <th>Process Status</th> 
       
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
       
        $book_id=$row['book_id'];
        echo "<tr>
            <td>{$row['book_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['preffereddate']}</td>
            <td>{$row['message']}</td>
            <td>{$row['aname']}</td>
             <td>{$row['bookstatus']}</td>  
              <td>{$row['process_status']}</td>   
 
          </tr>";
    } 
    ?>
<?php
    echo "</table>";
} else {
    echo "0 results";
}
?>