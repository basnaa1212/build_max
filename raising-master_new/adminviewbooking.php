<?php
include 'admin-side.php';
include 'connection.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id = $_POST['book_id'] ?? null;
    $status = $_POST["Status_$book_id"] ?? null; // Fetch the correct Status for the row

    if ($book_id && $status) {
        $update_query = "UPDATE booking_table SET bookstatus='$status' WHERE book_id=$book_id";
        if (mysqli_query($con, $update_query)) {
            echo "Status updated successfully for book_id: $book_id<br>";
        } else {
            echo "Error updating record: " . mysqli_error($con) . "<br>";
        }
    } else {
        echo "Missing book_id or Status in POST request.<br>";
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="2.css">
</head>
<body>
<?php
// Fetch records from the database
$sql = "select b.book_id,b.preffereddate,b.message,b.bookstatus,u.name,s.name as aname from booking_table b inner join user_details u on b.email=u.email inner join add_architect s on s.email=b.archemail";
$result = mysqli_query($con, $sql);

if ($result && $result->num_rows > 0) {
    echo "<form method='post'>";
    echo "<table border='5' cellspacing='10' cellpadding='10'>
    <tr>
        <th>book_id</th>
        <th>Name</th>
        <th>Preffereddate</th>
        <th>Message</th>
        <th>Architect Name</th>
        <th>Status</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        $status = $row['bookstatus'];
        $book_id = $row['book_id'];
        echo "<tr>
            <td>{$row['book_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['preffereddate']}</td>
            <td>{$row['message']}</td>
            <td>{$row['aname']}</td>

            <td>
                <select name='Status_$book_id'> <!-- Unique name for each row -->
                    <option value='Pending'" . ($status == 'Pending' ? ' selected' : '') . ">Pending</option>
                    <option value='Approved'" . ($status == 'Approved' ? ' selected' : '') . ">Approved</option>
                    <option value='Rejected'" . ($status == 'Rejected' ? ' selected' : '') . ">Rejected</option>
                </select>
            </td>
            <td>
                <button type='submit' name='book_id' value='$book_id'>Update</button>
            </td>
        </tr>";
    }
    echo "</table>";
    echo "</form>";
} else {
    echo "No records found.<br>";
}
?>
</body>
</html>