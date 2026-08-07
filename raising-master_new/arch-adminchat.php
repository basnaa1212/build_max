<?php
include 'arch-side.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Chatbox</title>
    <link rel="stylesheet" href="msg.css">
</head>
<body>
    <div class="chat-container">
        <h2>Architect Chatbox</h2>
        <div class="chat-box" id="chat-box"></div>
        <form id="chat-form">
            <input type="text" id="message" placeholder="Type your message..." required>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="arch-adminchat.js"></script>
</body>
</html>
