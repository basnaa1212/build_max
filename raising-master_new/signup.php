<?php
include 'connection.php';
session_start();

if (isset($_POST['Submit1'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // Check if email already exists
    $email_check_query = "SELECT * FROM user_details WHERE email = '$email'";
    $email_check_result = mysqli_query($con, $email_check_query);
    $email_count = mysqli_num_rows($email_check_result);

    // Check if phone number already exists
    $phone_check_query = "SELECT * FROM user_details WHERE phoneno = '$phoneno'";
    $phone_check_result = mysqli_query($con, $phone_check_query);
    $phone_count = mysqli_num_rows($phone_check_result);

    if ($email_count > 0) {
        echo "<script>alert('Email is already registered!');</script>";
        echo("<script>window.location = 'login.php';</script>");
    } elseif ($phone_count > 0) {
        echo "<script>alert('Phone number is already registered!');</script>";
        echo("<script>window.location = 'login.php';</script>");
    } else {
        // If email and phone number are unique, proceed with registration
        $insert_login_query = "INSERT INTO login (email, password, usertype) VALUES ('$email', '$password', 'user')";
        $insert_user_details_query = "INSERT INTO user_details (name, email, phoneno, address, password) VALUES ('$name', '$email', '$phoneno', '$address', '$password')";

        // Execute the queries
        $result1 = mysqli_query($con, $insert_login_query);
        $result = mysqli_query($con, $insert_user_details_query);

        if ($result1 && $result) {
            $_SESSION['username']=$email;
            // Success, redirect to user dashboard
            echo "<script>alert('Registration successful!');</script>";
            echo("<script>window.location = 'user-dash.php';</script>");
        } else {
            // Failure, display error message
            echo "<h1>Registration failed. Please try again later.</h1>";
        }
    }
}
?>
