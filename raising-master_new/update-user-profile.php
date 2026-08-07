<?php
session_start(); // Start the session
include 'user-side.php';
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
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
$p = $_SESSION["username"];  // This should be set after successful login

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission for editing user details
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];  // Make sure this matches the form field name
    $address = $_POST['address'];
    
    // Check if a new password is provided
    if (!empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
        $update_query = "UPDATE user_details SET name = '$name', email = '$email', phoneno = $phoneno, address = '$address', password = '$password' WHERE email = $p";
        $stmt = $conn->prepare($update_query);
        //$stmt->bind_param('ssssss', $name, $email, $phone, $address, $password, $p);
    } else {
        $update_query = "UPDATE user_details SET name = '$name' , email = '$email', phoneno = $phoneno, address = '$address' WHERE email = '$p'";
        $stmt = $conn->prepare($update_query);
      //  $stmt->bind_param('sssss', $name, $email, $phone, $address, $p);
    }

    if ($stmt->execute()) {
        echo "<p>Profile updated successfully!</p>";
    } else {
        echo "<p>Error updating profile: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Fetch user details based on the logged-in user's email
$query = "SELECT * FROM user_details WHERE email = '$p'";
$stmt = $conn->prepare($query);
//$stmt->bind_param('s', $p);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>

    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br><br>

        <label for="phoneno">Phone no:</label><br>
        <input type="tel" id="phoneno" name="phoneno" value="<?php echo htmlspecialchars($user['phoneno']); ?>" required><br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($user['address']); ?>" required><br><br>

        <label for="password">Password (Leave empty to keep current password):</label><br>
        <input type="password" id="password" name="password" placeholder="Enter new password"><br><br>

        <button type="submit" name="submit" id="submit">Save Changes</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>
<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="updateuser.css">
  </body>
  </html>


