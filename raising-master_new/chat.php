<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buildmax";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender = $_POST['sender_id'];
    $receiver = $_POST['receiver_id'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $sender, $receiver, $message);
    $stmt->execute();
    echo "Message sent successfully!";
    $stmt->close();
} else {
    $receiver = $_GET['receiver'];
    $sender = $_GET['sender'];

    $stmt = $conn->prepare("SELECT sender, message FROM messages WHERE (sender = ? AND receiver = ?) OR (sender = ? AND receiver = ?) ORDER BY timestamp ASC");
    $stmt->bind_param("iiii", $sender, $receiver, $receiver, $sender);
    $stmt->execute();
    $result = $stmt->get_result();

    $messages = [];
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    echo json_encode($messages);
    $stmt->close();
}

$conn->close();
?>
