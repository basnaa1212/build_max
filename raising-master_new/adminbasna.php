<?php
session_start();
include('basna.php');
include "admin-side.php";
// Fetch the list of architects
$sql = "SELECT architect_id, name FROM add_architect";
$result = $conn->query($sql);

// Get selected architect ID and messages
if (isset($_GET['architect_id'])) {
    $architect_id = $_GET['architect_id'];

    // Fetch messages between admin (id = 0) and selected architect
    $messages_sql = "SELECT * FROM messages WHERE (sender_id = 0 AND receiver_id = $architect_id) 
                     OR (sender_id = $architect_id AND receiver_id = 0) ORDER BY timestamp";
    $messages_result = $conn->query($messages_sql);
}

// Send message logic
if (isset($_POST['send_message'])) {
    $message = $_POST['message'];
    $receiver_id = $_POST['receiver_id'];

    // Insert the message into the database
    $sql_insert = "INSERT INTO messages (sender_id, receiver_id, message) 
                   VALUES (0, $receiver_id, '$message')"; // 0 is the admin ID
    if ($conn->query($sql_insert) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Messaging System</title>
</head>
<body>
    <h2>Admin Message Center</h2>

    <h3>Select Architect to Message</h3>
    <form method="GET">
        <select name="architect_id" onchange="this.form.submit()">
            <option value="">Select Architect</option>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <option value="<?= $row['architect_id'] ?>" <?= (isset($_GET['architect_id']) && $_GET['architect_id'] == $row['architect_id']) ? 'selected' : '' ?>>
                    <?= $row['name'] ?>
                </option>
            <?php } ?>
        </select>
    </form>

    <?php if (isset($architect_id)): ?>
        <h3>Messages with Architect ID: <?= $architect_id ?></h3>

        <div class="messages">
            <?php while ($message = $messages_result->fetch_assoc()) { ?>
                <div class="message">
                    <strong><?= ($message['sender_id'] == 0) ? 'Admin' : 'Architect ' . $message['sender_id'] ?>:</strong>
                    <p><?= $message['message'] ?></p>
                    <small><?= $message['timestamp'] ?></small>
                </div>
            <?php } ?>
        </div>

        <h3>Send a Message</h3>
        <form method="POST" action="adminbasna.php">
            <textarea name="message" required></textarea><br>
            <input type="hidden" name="receiver_id" value="<?= $architect_id ?>">
            <button type="submit" name="send_message">Send</button>
        </form>
    <?php endif; ?>
</body>
</html>
