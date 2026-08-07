<?php
include "connection.php";
include "user-side.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
</head>
<body>
    <h2>Pay with Stripe</h2>
    
    <form  method="POST">
        <label for="cardNumber">Card Number</label>
        <input type="text" id="cardNumber" name="cardNumber" required>
        
        <label for="expiryDate">Expiry Date (MM/YY)</label>
        <input type="date" id="expiryDate" name="expiryDate" required>
        
        <label for="cvc">CVC</label>
        <input type="text" id="cvc" name="cvc" required>

        <button type="submit" name="submit" id="submit">Pay Now</button>
    </form>
</body>
</html>
<?php

// Set your Stripe secret key here
$stripeSecretKey = 'YOUR_STRIPE_SECRET_KEY'; // Get from Stripe Dashboard

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardNumber = $_POST['cardNumber'];
    $expiryDate = $_POST['expiryDate'];
    $cvc = $_POST['cvc'];

    // Extract MM/YY expiry date
    list($expMonth, $expYear) = explode('/', $expiryDate);

    // Make the payment request to Stripe's API
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/tokens");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $stripeSecretKey"
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'card[number]' => $cardNumber,
        'card[exp_month]' => $expMonth,
        'card[exp_year]' => $expYear,
        'card[cvc]' => $cvc
    ]);

    // Get the response from Stripe
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    // Decode the response from Stripe
    $data = json_decode($response, true);

    if (isset($data['id'])) {
        // Successfully created the token
        $token = $data['id'];
        
        // Now charge the card
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/charges");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer $stripeSecretKey"
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'amount' => 1000, // Amount in cents ($10.00)
            'currency' => 'usd',
            'source' => $token, // The token we created above
            'description' => 'Test Payment'
        ]);

        // Get the response from Stripe
        $chargeResponse = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        // Decode the response
        $chargeData = json_decode($chargeResponse, true);

        if (isset($chargeData['status']) && $chargeData['status'] == 'succeeded') {
            echo "Payment successful!";
        } else {
            echo "Payment failed: " . $chargeData['failure_message'];
        }
    } else {
        echo "Card error: " . $data['error']['message'];
    }
}
?>
