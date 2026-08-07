<?php
include 'connection.php';
include 'arch-side.php';
// admin.php
session_start();
 // Include your database connection

// Check if admin is logged in
//if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
  //  echo "You must be logged in as an admin.";
    //exit;
//}

// Handle update submission
/*if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $updates = mysqli_real_escape_string($conn, $_POST['updates']);

    // Insert the update into the database
    $query = "INSERT INTO arch_updates (updates) VALUES ('$updates')";
    if (mysqli_query($conn, $query)) {
        echo "Update successfully shared!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Share Update</title>
</head>
<body>

    <h1>Architect - Share Update with Approved Users</h1>

    <form  method="POST">
        <label for="updates">Updates:</label><br>
        <textarea name="updates" id="updates" rows="5" cols="50" required></textarea><br><br>
        <button type="submit" name="submit" id="submit">Submit Update</button>
    </form>

</body>
</html>*/
?>
<?php
// Database connection (replace with your actual connection details)
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'buildmax';

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for sending an update
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updates'])) {
    //$architect_id = $_POST['architect_id']; // Assume architect_id is passed
    $updates = $_POST['updates'];

    // Insert update into the updates table
    $sql = "INSERT INTO arch_updates (updates) VALUES ($updates NOW())";
    $stmt = $conn->prepare($sql);
    //$stmt->bind_param("is", $architect_id, $update_data);
    $p=$_SESSION["username"];
    if ($stmt->execute()) {
        echo "Update sent successfully!";

        // Now send this update to all approved users associated with this architect
        $sql_users = "SELECT u.user_id, u.name 
                      FROM user_details u 
                      Inner JOIN booking_table b ON u.user_id = b.book_id 
                      WHERE b.email = '$p' AND b.bookstatus = approved";
        $stmt_users = $conn->prepare($sql_users);
       // $stmt_users->bind_param("i", $architect_id);
        $stmt_users->execute();
        $result = $stmt_users->get_result();

        // Loop through the users and send them the update (you can implement email or other notification here)
        while ($user = $result->fetch_assoc()) {
            // Assuming you send the update via email, for example:
            $to = $user['username'] . '@example.com';  // Example: use actual email or user method
            $subject = "New Update from Architect";
            $message = "Hello " . $user['username'] . ",\n\n" . $update . "\n\nBest regards, Architect";
            $headers = "From: architect@example.com";

            // Uncomment below to actually send an email (ensure mail() is configured properly)
            // mail($to, $subject, $message, $headers);
            echo "Update sent to: " . $user['username'] . "<br>"; // Example confirmation
        }

    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close connection
$conn->close();
?>

<!-- Form for architect to send updates -->
<form method="POST" action="">
    <label for="update_data">Enter your update:</label><br>
    <textarea name="update_data" id="update_data" rows="4" cols="50" required></textarea><br><br>

    <label for="architect_id">Architect ID:</label>
    <input type="text" name="architect_id" id="architect_id" required><br><br>

    <input type="submit" value="Send Update">
</form>
