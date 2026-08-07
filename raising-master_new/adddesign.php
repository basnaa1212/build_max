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
    <title>Add Design</title>
    <link rel="stylesheet" href="formstyle2.css">
</head>
<body>

    <div class="form-container">
        <h1>Add InteriorDesign Details</h1>

        <!-- Form to add plan details with image upload -->
        <form method="POST"  enctype="multipart/form-data">
        <label for="options">Choose InteriorDesign Type:</label>
        <select id="designtype_id" name="designtype_id">
            <?php
            $sql = "select * from designtype_details";
            $result = mysqli_query($con, $sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $designtype=$row['designtype'];
                    $designtype_id=$row['designtype_id'];
                ?>
              
            
            
                <option value="<?php echo $designtype_id;?>"><?php echo $designtype;?></option>
                <?php }}?>
    </select><br><br   />
                <label for="image">InteriorDesign Image:</label>
            <input type="file" name="image" id="image" accept=".png, .jpeg" multiple required><br><br    />
            <label for="description">InteriorDesign Description:</label>
            <input type="text" name="description" id="description" required><br><br  />
            <label for="budget">Budget persqrft:</label>
            <input type="text" name="budget" id="budget" required><br><br  />
          
            <button type="Submit" name="Submit" id="Submit">Add InteriorDesign</button>
        </form>
    </div>

</body>
<?php
if(isset($_POST['Submit']))	
{ 
    $designtype_id=$_POST['designtype_id'];
    $description=$_POST['description'];
    $budget=$_POST['budget'];
    //$image=$_POST['image'];
    $p=$_SESSION["username"];
    $filename4 = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];  
    $folder = "designimages/".$filename4;
    if (move_uploaded_file($tempname, $folder)) {

      $msg = "Image uploaded successfully";

  }else{

      $msg = "Failed to upload image";

}


//$s="insert into login(email,password,usertype) values('$email','$password','architect')";
$sql="insert into design_details(designtype_id,description,image,email,budget) values('$designtype_id','$description','$filename4','$p','$budget')";
$result=mysqli_query($con,$sql);

if($result==TRUE)
{
    echo "inserted";
    echo "<script>location.href = 'viewdesign.php';</script>";
}
else{
   echo"<h1>not inserted.</h1>";

}
}

?>
</html>
