
<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="addarchitect.css">
  </body>
  </html>
<?php
include 'arch-side.php';
session_start(); // Start the session

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'buildmax';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the logged-in user's email from the session
$p = $_SESSION["username"];  // Assuming the email is stored in the session

// Fetch architect profile data from the database
$query = "SELECT * FROM add_architect WHERE email = '$p'";
$stmt = $conn->prepare($query);
//$stmt->bind_param('s', $p);
$stmt->execute();
$result = $stmt->get_result();
$architect = $result->fetch_assoc();
$stmt->close();

// Handle form submission for updating the profile
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
   // if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
     //   $photo = 'architectphotos/' .basename($_FILES['photo']['name']);
       // move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    //} else {
      //  $photo = $architect['photo']; // Keep the existing photo if no new one is uploaded
    //}
    $filename1 = $_FILES["photo"]["name"];
    $tempname1 = $_FILES["photo"]["tmp_name"];  
    $folder1 = "architectphotos/".$filename1;
   
    if (move_uploaded_file($tempname1, $folder1)) {

        $msg = "Image uploaded successfully";
  
    }else{
  
        $msg = "Failed to upload image";
        $filename1 = $architect['photo'];

  }

    $email = $_POST['email'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $qualification = $_POST['qualification'];
   // if (isset($_FILES['qualificationcertificate']) && $_FILES['qualificationcertificate']['error'] === UPLOAD_ERR_OK) {
     //   $photo1 = 'qualificationimages/' .basename($_FILES['qualificationcertificate']['name']);
       // move_uploaded_file($_FILES['qualificationcertificate']['tmp_name'], $photo1);
    //} else {
      //  $photo1 = $architect['qualificationcertificate']; // Keep the existing photo if no new one is uploaded
    //}
    $filename = $_FILES["qualificationcertificate"]["name"];
    $tempname = $_FILES["qualificationcertificate"]["tmp_name"];  
    $folder = "qualificationimages/".$filename;
    if (move_uploaded_file($tempname, $folder)) {

      $msg = "Image uploaded successfully";

  }else{
    $filename = $architect['qualificationcertificate'];
      $msg = "Failed to upload image";

}

    //$qualificationcertificate = $_POST['qualificationcertificate'];
    $experience = $_POST['experience'];
    $password = $_POST['password'];
    
    // Photo upload handling
   
    // Update password if provided
    if (!empty($password)) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $update_query = "UPDATE add_architect SET name = '$name', email = '$email' , address = '$address', phoneno = $phoneno , qualification = '$qualification', qualificationcertificate = '$filename', experience = '$experience', password = '$password', photo = '$filename1' WHERE email = '$p'";
        $stmt = $conn->prepare($update_query);
       // $stmt->bind_param('sssssssss', $name, $email, $phone, $address, $certificate, $qualification, $password, $photo, $p);
    } else {
        $update_query = "UPDATE add_architect SET name = '$name', email = '$email' , address = '$address', phoneno = $phoneno , qualification = '$qualification', qualificationcertificate = '$filename', experience = '$experience', photo = '$filename1' WHERE email = '$p'";
        $stmt = $conn->prepare($update_query);
       // $stmt->bind_param('ssssssss', $name, $email, $phone, $address, $certificate, $qualification, $photo, $p);
    }

    if ($stmt->execute()) {
        echo "<p>Profile updated successfully!</p>";
    } else {
        echo "<p>Error updating profile: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Profile</title>
</head>
<body>
    <h1>Update Architect Profile</h1></br   >

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($architect['name']); ?>" required><br><br>

        <label for="photo">Profile Photo:</label><br>
        <input type="file" id="photo" name="photo"><br><br>
        <?php if (!empty($architect['photo'])): ?>
            <img src="architectphotos/<?php echo htmlspecialchars($architect['photo']); ?>" alt="Profile Photo" width="100"><br><br>
        <?php endif; ?>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($architect['email']); ?>" required><br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($architect['address']); ?>" required><br><br>

        <label for="phone">Phone No:</label><br>
        <input type="tel" id="phoneno" name="phoneno" value="<?php echo htmlspecialchars($architect['phoneno']); ?>" required><br><br>

        <label for="qualification">Qualification:</label><br>
        <input type="text" id="qualification" name="qualification" value="<?php echo htmlspecialchars($architect['qualification']); ?>" required><br><br>

        <label for="qualificationcertificate">Upload Certificate:</label><br>
        <input type="file" id="qualificationcertificate" name="qualificationcertificate"><br><br>
        <?php if (!empty($architect['qualificationcertificate'])): ?>
            <a href="qualificationimages/<?php echo htmlspecialchars($architect['qualificationcertificate']); ?>" target="_blank">View Certificate</a><br><br>
        <?php endif; ?>
        
        <label for="experience">Experience:</label><br>
        <input type="text" id="experience" name="experience" value="<?php echo htmlspecialchars($architect['experience']); ?>" required><br><br>


        <label for="password">Password (Leave empty to keep the current password):</label><br>
        <input type="password" id="password" name="password"><br><br>

       
        
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>

