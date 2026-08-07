<?php
/*include 'admin-side.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Chatbox</title>
    <link rel="stylesheet" href="msg.css">
</head>
<body>
    <div class="chat-container">
        <h2>Admin Chatbox</h2>
        <div class="chat-box" id="chat-box"></div>
        <form id="chat-form">
            <input type="text" id="message" placeholder="Type your message..." required>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="admin-archchat.js"></script>
</body>
</html>*/
?>
<?php
include 'admin-side.php';
include 'basna.php';  // Include the database connection file

// Fetch the list of architects from the database
$sql = "SELECT architect_id, name FROM add_architect";
$result = $conn->query($sql);

// Check if a message has been sent
/*if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send_message'])) {
    $message = $_POST['message'];
    $receiver_id = $_POST['receiver_id'];  // Architect selected from the form

    // Insert the message into the database
    $sql_insert = "INSERT INTO messages (sender_id, receiver_id, message) 
                   VALUES (0, $receiver_id, '$message')"; // '0' is for the admin's ID

    if ($conn->query($sql_insert) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}*/
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Chatbox</title>
    <link rel="stylesheet" href="msg.css">
</head>
<body>
    <div class="chat-container">
        <h2>Admin Chatbox</h2>

        <!-- Architect Selection Dropdown -->
        <form method="GET">
            <label for="architect_id">Select Architect:</label>
            <select name="architect_id" id="architect_id" onchange="this.form.submit()">
                <option value="">Select Architect</option>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?= $row['architect_id'] ?>" 
                        <?= (isset($_GET['architect_id']) && $_GET['architect_id'] == $row['architect_id']) ? 'selected' : '' ?>>
                        <?= $row['name'] ?>
                    </option>
                <?php } ?>
            </select>
        </form>

        <?php if (isset($_GET['architect_id'])): ?>
            <?php
                $architect_id = $_GET['architect_id'];

                // Fetch messages between the admin and the selected architect
                $messages_sql = "SELECT * FROM messages WHERE (sender_id = 0 AND receiver_id = $architect_id) 
                                 OR (sender_id = $architect_id AND receiver_id = 0) ORDER BY timestamp";
                $messages_result = $conn->query($messages_sql);
            ?>

            <!-- Display the messages for the selected architect -->
            <div class="chat-box" id="chat-box">
                <?php while ($message = $messages_result->fetch_assoc()) { ?>
                    <div class="message">
                        <strong><?= ($message['sender_id'] == 0) ? 'Admin' : 'Architect ' . $message['sender_id'] ?>:</strong>
                        <p><?= $message['message'] ?></p>
                        <small><?= $message['timestamp'] ?></small>
                    </div>
                <?php } ?>
            </div>

            <!-- Message Sending Form -->
            <form method="POST" id="chat-form">
                <textarea name="message" id="message" placeholder="Type your message..." required></textarea><br>
                <input type="hidden" name="receiver_id" value="<?= $architect_id ?>">
                <button type="submit" name="send_message" id="submit">Send</button>
            </form>

        <?php else: ?>
            <p>Select an architect to start messaging.</p>
        <?php endif; ?>
    </div>

    <script src="admin-archchat.js"></script>
</body>
</html>
?>







