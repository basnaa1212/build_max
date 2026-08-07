




<?php
session_start();
include 'connection.php'; // Make sure your database connection is correct

// Check if email is set in session
if (!isset($_SESSION['username'])) {
    die("Unauthorized access");
}

$email = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Processing</title>
    <style>
         <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .payment-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        .booking-details {
            background: #e3e3e3;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: left;
        }
        .payment-container h2 {
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .input-group input, .input-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background:#99775C;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background: #99775C;
        }
        .hidden {
            display: none;
        }
        .qr-code {
            width: 150px;
         
            height: 150px;
            margin: 10px auto;
        }  /* Your existing styles here */
    </style>
    <script>
        function showPaymentFields() {
            document.getElementById('card-details').classList.add('hidden');
            document.getElementById('upi-details').classList.add('hidden');
            document.getElementById('qr-code-container').classList.add('hidden');
            
            let paymentMethod = document.getElementById('payment-method').value;
            if (paymentMethod === 'debit-card' || paymentMethod === 'credit-card') {
                document.getElementById('card-details').classList.remove('hidden');
            } else if (paymentMethod === 'upi') {
                document.getElementById('upi-details').classList.remove('hidden');
            } else if (paymentMethod === 'google-pay' || paymentMethod === 'phone-pay') {
                document.getElementById('qr-code-container').classList.remove('hidden');
            }
        }
    </script>
</head>
<body>
    <h2>Payment Details</h2>
    <form action="" method="POST">
        <div class="input-group">
            <label for="payment-method">Payment Method</label>
            <select id="payment-method" name="payment-method" onchange="showPaymentFields()">
                <option value="debit-card">Debit Card</option>
                <option value="credit-card">Credit Card</option>
                <option value="google-pay">Google Pay</option>
                <option value="phone-pay">Phone Pay</option>
                <option value="upi">UPI</option>
            </select>
        </div>
        
        <div id="card-details" class="hidden">
            <div class="input-group">
                <label for="card-name">Cardholder Name</label>
                <input type="text" id="card-name" name="card-name" placeholder="John Doe">
            </div>
            <div class="input-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456">
            </div>
            <div class="input-group">
                <label for="expiry">Expiry Date</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YY">
            </div>
            <div class="input-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123">
            </div>
        </div>
        
        <div id="upi-details" class="hidden">
            <div class="input-group">
                <label for="upi-id">UPI ID</label>
                <input type="text" id="upi-id" name="upi-id" placeholder="yourupi@bank">
            </div>
        </div>
        
        <div id="qr-code-container" class="hidden">
            <p>Scan the QR Code to Pay</p>
            <img src="https://via.placeholder.com/150" alt="QR Code" class="qr-code">
        </div>
        
        <!-- Assuming you pass the price somehow, for example through a hidden input -->
        <input type="hidden" name="price" value="1000">  <!-- You can dynamically set the price here -->

        <button type="submit" class="btn" name="submit">Pay Now</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $d = date("Y/m/d");
        $t = $_POST['payment-method'];
        $price = $_POST['price'];  // Price should be passed from the form
        $stmt = $con->prepare("INSERT INTO payment (username, date, paytype, amount, paymentstatus) VALUES (?, ?, ?, ?, 'paid')");
        $stmt->bind_param("ssss", $email, $d, $t, $price);
        
        if ($stmt->execute()) {
            echo "<h1>Payment successfully completed.</h1>";
        } else {
            echo "<h1 style='color:red;'>Error. Please try again.</h1>";
        }
    }
    ?>
</body>
</html>
