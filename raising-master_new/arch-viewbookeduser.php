<?php
include 'arch-side.php';
session_start();


// Assume the current architect's ID is stored in the session
$email = $_SESSION['username'];
// Database connection
$servername = "localhost";
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "buildmax"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id = $_POST['book_id'] ?? null;
    $process_status = $_POST["Status_$book_id"] ?? null; // Fetch the correct Status for the row

    if ($book_id && $process_status) {
        $update_query = "UPDATE booking_table SET process_status='$process_status' WHERE book_id=$book_id";
        if (mysqli_query($conn, $update_query)) {
            echo "Status updated successfully for book_id: $book_id<br>";
        } else {
            echo "Error updating record: " . mysqli_error($conn) . "<br>";
        }
    } else {
        echo "Missing book_id or Status in POST request.<br>";
    }
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// Query to fetch only approved users
$sql = "SELECT * FROM booking_table WHERE bookstatus = 'approved' AND archemail='$email'";
$result = $conn->query($sql);

// HTML structure to display the results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Users</title>
    <link rel="stylesheet" href="5.css">

    <!--style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>-->
</head>
<body>
    <!--<h1>Approved Users</h1>-->
    
    <?php if ($result->num_rows > 0):{ 
        echo "<form method='post'>";
        echo "<table border='5' cellspacing='10' cellpadding='10'>
    <table>
            <tr>
                <th>ID</th>
               
                <th>Email</th>
                <th>Status</th>
                <th> Process Status</th>
            </tr>";
            
            
            // Output data of each approved user
            while($row = $result->fetch_assoc()) {
                $process_status = $row['process_status'];
                $book_id = $row['book_id'];
                echo "<tr>
                        <td>" . $row["book_id"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["bookstatus"] . "</td>
                        
                          <td>
                <select name='Status_$book_id'> <!-- Unique name for each row -->
                    <option value='flooring'" . ($process_status == 'flooring' ? ' selected' : '') . ">flooring</option>
                    <option value='roofing'" . ($process_status == 'roofing' ? ' selected' : '') . ">roofing</option>
                    <option value='finished'" . ($process_status == 'finished' ? ' selected' : '') . ">finished</option>
                </select>
            </td>
            <td>
                <button type='submit' name='book_id' value='$book_id'>Update</button>
            </td>

                    </tr>";
            }
            
            echo "</table>";
            echo "</form>";
    }
else: { 
        echo "No approved users found.";
    }

        ?>
    <?php endif; ?>
    
    <?php
    // Close the database connection
    $conn->close();
    ?>
    
</body>
</html>
