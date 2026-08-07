<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Message to Architect</title>
</head>
<body>

    <h2>Send Message to Architect</h2>

    <form  method="post">
        <label for="architect">Select Architect:</label><br>
        <select id="architect" name="architect_id">
            <?php
            // Fetch architects from the database
            $conn = new mysqli('localhost', 'username', 'password', 'buildmax');
            $result = $conn->query("SELECT architect_id, name FROM add_architect ");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['architect_id'] . "'>" . $row['name'] . "</option>";
            }
            ?>
        </select><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Send Message">
    </form>

</body>
</html>
<?php
// Establish DB connection
$conn = new mysqli('localhost', 'username', 'password', 'buildmax');

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get admin's ID (assuming admin is logged in)
    $admin_id = 1; // Hardcoded for now, replace with session variable after login system

    $architect_id = $_POST['architect_id']; // Architect ID from dropdown
    $message = $_POST['message']; // Message content

    // Insert message into database
    $stmt = $conn->prepare("INSERT INTO messages_adminarch (sender_id, receiver_id, message) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $admin_id, $architect_id, $message);
    
    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
