<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sender = $con->real_escape_string($_POST["sender"]);
    $recipient = $con->real_escape_string($_POST["recipient"]);
    $message = $con->real_escape_string($_POST["message"]);
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $targetDir = "msg/";
        $targetFile = $targetDir . basename($file["name"]);
        
        // Check if file is a valid image
        if (getimagesize($file["tmp_name"])) {
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                $image = $targetFile;
            } else {
                $image = null;
            }
        }
    }


    $sql = "INSERT INTO msg (sender, receiver, message,image) VALUES ('$sender', '$recipient', '$message','$image')";
    $con->query($sql);
}
?>
