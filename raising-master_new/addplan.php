<?php
include 'arch-side.php';
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Plan</title>
    <link rel="stylesheet" href="formstyle2.css">
</head>
<body>

    <div class="form-container">
        <h1>Add Plan Details</h1>

        <!-- Form to add plan details with image upload -->
        <form method="POST"  enctype="multipart/form-data">
        <label for="options">Choose Plan Type:</label>
        <select id="plantype_id" name="plantype_id">
            <?php
            $sql = "select * from plantype_details";
            $result = mysqli_query($con, $sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $plantype=$row['plantype'];
                    $plantype_id=$row['plantype_id'];
                ?>
              
            
            
                <option value="<?php echo $plantype_id;?>"><?php echo $plantype;?></option>
                <?php }}?>
    </select><br><br   />
                <label for="image">Plan Image:</label>
            <input type="file" name="image" id="image" accept=".png, .jpeg" multiple required><br><br    />
            <label for="plandescription">Plan Description:</label>
            <input type="text" name="plandescription" id="plandescription" required><br><br  />
            <label for="budget">Budget persqrft:</label>
            <input type="text" name="budget" id="budget" required><br><br  />
            <button type="Submit" name="Submit" id="Submit">Add Plan</button>
        </form>
    </div>

</body>
<?php
if(isset($_POST['Submit']))	
{ 
    $plantype_id=$_POST['plantype_id'];
    $plandescription=$_POST['plandescription'];
    $budget=$_POST['budget'];

    //$image=$_POST['image'];
    $p=$_SESSION["username"];
    $filename3 = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];  
    $folder = "planimages/".$filename3;
    if (move_uploaded_file($tempname, $folder)) {

      $msg = "Image uploaded successfully";

  }else{

      $msg = "Failed to upload image";

}


//$s="insert into login(email,password,usertype) values('$email','$password','architect')";
$sql="insert into plan_details(plantype_id,plandescription,image,email,budget) values('$plantype_id','$plandescription','$filename3','$p','$budget')";
$result=mysqli_query($con,$sql);

if($result==TRUE)
{
    echo "inserted";
    echo "<script>location.href = 'viewplan.php';</script>";

}
else{
   echo"<h1>not inserted.</h1>";

}
}

?>
</html>
