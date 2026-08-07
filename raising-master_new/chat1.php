<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Chat</title>
    <link rel="stylesheet" type="text/css" href="chat.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; }
        #chat-box { width: 400px; height: 300px; border: 1px solid #ccc; overflow-y: scroll; padding: 10px; }
        .message { margin-bottom: 10px; }
        input[type="file"] {
            display: none;
        }
        .upload-btn {
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Private Chat</h2>

    <label>Sender Email:</label>
    <input type="text" id="username" placeholder="Enter your name" 
        value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">

    <label>Chat With:</label>
    <input type="text" id="recipient" placeholder="Enter recipient's name" value="admin@buildmax.com">

    <div id="chat-box"></div>

    <input type="text" id="message" placeholder="Type a message">
    <input type="file" id="file" accept="image/*">
    <button class="upload-btn" onclick="document.getElementById('file').click()">Upload Photo</button>
    <button onclick="sendMessage()">Send</button>

    <script>
        function fetchMessages() {
            let username = $("#username").val();
            let recipient = $("#recipient").val();

            if (username && recipient) {
                $.get("fetch.php", { username: username, recipient: recipient }, function(data) {
                    $("#chat-box").html(data);
                    $("#chat-box").scrollTop($("#chat-box")[0].scrollHeight);
                });
            }
        }

        function sendMessage() {
            let username = $("#username").val();
            let recipient = $("#recipient").val();
            let message = $("#message").val();
            let file = $("#file")[0].files[0];

            let formData = new FormData();
            formData.append('sender', username);
            formData.append('recipient', recipient);
            formData.append('message', message);
            if (file) {
                formData.append('file', file);
            }

            if (username && recipient && (message || file)) {
                $.ajax({
                    url: 'send.php',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function() {
                        $("#message").val("");
                        $("#file").val("");
                        fetchMessages();
                    }
                });
            }
        }

        setInterval(fetchMessages, 2000);
    </script>

</body>
</html>
