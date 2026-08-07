<?php
include 'connection.php';
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if username and recipient are set
if (isset($_GET["username"]) && isset($_GET["recipient"])) {
    $username = $con->real_escape_string($_GET["username"]);
    $recipient = $con->real_escape_string($_GET["recipient"]);

    // Fetch messages only between the logged-in user and the selected recipient
    $sql = "SELECT * FROM msg WHERE 
            (sender='$username' AND receiver='$recipient') 
            OR (sender='$recipient' AND receiver='$username') 
            ORDER BY created_at ASC";

    $result = $con->query($sql);

    // Display messages
    while ($row = $result->fetch_assoc()) {
        echo "<div class='message'><strong>{$row['sender']}:</strong> {$row['message']}</div>";
        if ($row['image']) {
            echo "<img src='" . $row['image'] . "' width='100' alt='Image'><br>";
        }
    }
}
?>

