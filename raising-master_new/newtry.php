<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message from Admin to Architect</title>
</head>
<body>

    <h2>Send Message to Architect</h2>

    <!-- Form to send the message -->
    <form  method="post">
        <label for="email">Architect's Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Send Message">
    </form>

</body>
</html>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Admin's details
    $admin_name = "Admin";
    $admin_email = "admin@buildmax.com"; // Admin's email address

    // Prepare email headers
    $headers = "From: $admin_name <$admin_email>" . "\r\n" .
               "Reply-To: $admin_email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8" . "\r\n";

    // Send email to the architect
    if (mail($email, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
} else {
    // If the form is not submitted
    echo "No data received.";
}
?>
