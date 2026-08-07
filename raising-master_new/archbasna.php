<?php
session_start();
include('basna.php');
include "arch-side.php";
?>
<?php
// Check if the architect is logged in
if (!isset($_SESSION['architect_id'])) {
// echo "You must be logged in to view messages.";
//exit;


$architect_id = $_SESSION['architect_id']; // The logged-in architect's ID

// Fetch messages for the architect (who is replying to the admin with ID 0)
$messages_sql = "SELECT * FROM messages WHERE (sender_id = 0 AND receiver_id = $architect_id) 
                 OR (sender_id = $architect_id AND receiver_id = 0) ORDER BY timestamp";
$messages_result = $conn->query($messages_sql);

// Send message logic for architect
if (isset($_POST['send_message'])) {
    $message = $_POST['message'];

    // Insert the reply message into the database (architect is the sender)
    $sql_insert = "INSERT INTO messages (sender_id, receiver_id, message) 
                   VALUES ($architect_id, 0, '$message')"; // Architect replies to admin (ID 0)
    
    if ($conn->query($sql_insert) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Architect Message Center</title>
</head>
<body>
    <h2>Architect Message Center</h2>

    <h3>Messages with Admin</h3>

    <div class="messages">
        <?php while ($message = $messages_result->fetch_assoc()) { ?>
            <div class="message">
                <strong><?= ($message['sender_id'] == 0) ? 'Admin' : 'Architect ' . $message['sender_id'] ?>:</strong>
                <p><?= $message['message'] ?></p>
                <small><?= $message['timestamp'] ?></small>
            </div>
        <?php } ?>
    </div>

    <h3>Reply to Admin</h3>
    <form method="POST" action="archbasna.php">
        <textarea name="message" required></textarea><br>
        <button type="submit" name="send_message">Send Reply</button>
    </form>
</body>
</html>
