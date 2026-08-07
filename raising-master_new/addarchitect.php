<?php
include 'admin-side.php';
include 'connection.php';
?>
<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="addarchitect.css">
  </body>
  </html>

      <main class="content"> 
        <div>
            <section>
        <form method="post" enctype="multipart/form-data">
            <label for="name"> Name:</label>
            <input type="text" id="name" name="name" required><br><br />

             <label for="photo"> Photo:</label>
            <input type="file" id="photo" name="photo" accept=".png, .jpeg" multiple required><br><br />
            
            <label for="Email"> Email:</label>
            <input type="email" id="email" name="email" required><br><br />

            <label for="address"> Address:</label>
            <textarea id="address" name="address" rows="5" cols="30" required></textarea><br><br />
            
            <label for="phoneno"> Phoneno:</label>
            <input type="tel" id="phoneno" name="phoneno" placeholder="+1234567890" pattern="^\+?[0-9]{10}$" required><br><br />

            <label for="qualification"> Qualification: </label>
            <input type="text" id="qualification" name="qualification" required><br><br />

            <label for="qualificationcertificate"> Qualification Certificate:</label>
            <input type="file" id="qualificationcertificate" name="qualificationcertificate" accept=".png, .jpeg" multiple required><br><br />
           

            <label for="experience"> Experience:</label>
            <input type="text" id="experience" name="experience" required><br><br />

            <label for="password"> Password:</label>
            <input type="password" id="password" name="password" placeholder="enter your password" pattern="^(?=.*[a-z])(?=.*[@$!%*?&#])[a-z@$!%*?&#]{6,}$" required><br><br />

            <button type="Submit" name="Submit" id="Submit">Add Architect</button>
            <br><br><br  />
            
        </form>
</section>
</div>

            
            
            
        </main>
    </div>
    <script>
        function toggleSubmenu(menuId) {
            const submenu = document.getElementById(menuId);
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        }
    </script>
<<?php
if(isset($_POST['Submit']))	
{ 
  
 $name=$_POST['name'];
    $email=$_POST['email'];
	$address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
    $qualification=$_POST['qualification'];
    $experience=$_POST['experience'];
    $password=$_POST['password'];
    $filename1 = $_FILES["photo"]["name"];
    $tempname1 = $_FILES["photo"]["tmp_name"];  
    $folder1 = "architectphotos/".$filename1;
    if (move_uploaded_file($tempname1, $folder1)) {

      $msg = "Image uploaded successfully";

  }else{

      $msg = "Failed to upload image";

}
    $filename = $_FILES["qualificationcertificate"]["name"];
    $tempname = $_FILES["qualificationcertificate"]["tmp_name"];  
    $folder = "qualificationimages/".$filename;
    if (move_uploaded_file($tempname, $folder)) {

      $msg = "Image uploaded successfully";

  }else{

      $msg = "Failed to upload image";

}

$s="insert into login(email,password,usertype) values('$email','$password','architect')";
$sql="insert into add_architect(name,photo,email,address,phoneno,qualification,qualificationcertificate,experience,password) values('$name','$filename1','$email','$address',$phoneno,'$qualification','$filename','$experience','$password')";
$result1=mysqli_query($con,$s);
$result=mysqli_query($con,$sql);

if($result1==TRUE)
{
    echo "inserted";
    echo "<script>location.href = 'viewarchitect.php';</script>";
}
else{
   echo"<h1>not inserted.</h1>";
   

}
}

?>

</html>