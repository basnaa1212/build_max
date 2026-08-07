<?php
session_start(); // Start the session
include 'arch-side.php';
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
    $assignedto = $_POST['assignedto'];
    $startingdate = $_POST['startingdate'];
    $endingdate = $_POST['endingdate'];  // Make sure this matches the form field name
    $status = $_POST['status'];
    
    // Check if a new password is provided
    if (!empty($_POST['password'])) {
        //$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
        $update_query = "UPDATE arch_schedule SET assignedto = '$assignedto', startingdate = '$startingdate', endingdate = '$endingdate', status = '$status' WHERE email = '$p'";
        $stmt = $conn->prepare($update_query);
        //$stmt->bind_param('ssssss', $name, $email, $phone, $address, $password, $p);
    } else {
        $update_query = "UPDATE arch_schedule SET assignedto = '$assignedto', startingdate = '$startingdate', endingdate = '$endingdate', status = '$status' WHERE email = '$p'";  
        $stmt = $conn->prepare($update_query);
      // $stmt->bind_param('sssss', $name, $email, $phone, $address, $p);
    }

    if ($stmt->execute()) {
        echo "<p>Schedule updated successfully!</p>";
    } else {
        echo "<p>Error updating schedule: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Fetch user details based on the logged-in user's email
$query = "SELECT * FROM arch_schedule WHERE email = '$p'";
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
    <title>Arch Schedule</title>
</head>
<body>
    <h1>Arch Schedule</h1>

    <form action="" method="POST">
        <label for="assignedto">Assignedto:</label><br>
        <input type="text" id="assignedto" name="assignedto" value="<?php echo htmlspecialchars($user['assignedto']); ?>" required><br><br>

        <label for="startingdate">Starting Date:</label><br>
        <input type="date" id="startingdate" name="startingdate" value="<?php echo htmlspecialchars($user['startingdate']); ?>" required><br><br>

        <label for="endingdate">Ending Date:</label><br>
        <input type="date" id="endingdate" name="endingdate" value="<?php echo htmlspecialchars($user['endingdate']); ?>" required><br><br>

        <label for="status">Status:</label><br>
       
        <select id="status" name="status" required>
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Not Started">Not Started</option>
            <option value="Completed">Completed</option>
        </select><br><br>
       
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

