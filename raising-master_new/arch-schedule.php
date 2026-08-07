<?php
include 'connection.php';
include 'arch-side.php';
session_start();
// Define the schedule data (You can store this in a database in a real-world scenario)
/*$schedule = [
    [
        'assigned_to' => 'John Doe',
        'start_date' => '2025-01-29',
        'end_date' => '2025-01-29',
        'status' => 'Pending'
    ],
    [
        'assigned_to' => 'Jane Smith',
        'start_date' => '2025-01-30',
        'end_date' => '2025-02-10',
        'status' => 'In Progress'
    ]
];

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the form and add it to the schedule array
    $assigned_to = htmlspecialchars($_POST['assigned_to']);
    $start_date = htmlspecialchars($_POST['start_date']);
    $end_date = htmlspecialchars($_POST['end_date']);
    $status = htmlspecialchars($_POST['status']);

    // Add the new task to the schedule
    $schedule[] = [
        'assigned_to' => $assigned_to,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'status' => $status
    ];
}

// Function to display the schedule
function displaySchedule($schedule) {
    echo '<table border="1" cellpadding="10">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Assigned To</th>';
    echo '<th>Start Date</th>';
    echo '<th>End Date</th>';
    echo '<th>Status</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Loop through each task and display it in the table
    foreach ($schedule as $task) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($task['assigned_to']) . '</td>';
        echo '<td>' . htmlspecialchars($task['start_date']) . '</td>';
        echo '<td>' . htmlspecialchars($task['end_date']) . '</td>';
        echo '<td>' . htmlspecialchars($task['status']) . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}*/
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Schedule</title>
</head>
<body>

    <h1>Add New Task</h1><br><br>

    <!-- Form for adding a new task -->
    <br  /><br  /><!--<h2 id="addnewtask">Add New Task</h2-->
    <form action="" method="post">
        <label for="assigned_to">Assigned To:</label><br>
        <input type="text" id="assignedto" name="assignedto" required><br><br>

        <label for="startingdate">Start Date:</label><br>
        <input type="date" id="startingdate" name="startingdate" required><br><br>

        <label for="endingdate">End Date:</label><br>
        <input type="date" id="endingdate" name="endingdate" required><br><br>

        <label for="status">Status:</label><br>
        <select id="status" name="status" required>
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Not Started">Not Started</option>
            <option value="Completed">Completed</option>
        </select><br><br>

        <button type="submit" id="submit" name="submit">Add Task</button>
    </form>

    <?php
    if(isset($_POST['submit']))
    {
$assignedto=$_POST['assignedto'];
$p = $_SESSION["username"];
$startingdate=$_POST['startingdate'];
$endingdate=$_POST['endingdate'];
$status=$_POST['status'];

//echo $service;
$sql="insert into arch_schedule(assignedto,email,startingdate,endingdate,status) values('$assignedto','$p','$startingdate','$endingdate','$status')";
$result=mysqli_query($con,$sql);
if($result==true)
{
  echo"<h1>schedule added succesfully.</h1>";
}
    }
    ?>


</body>
</html>
<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="updateuser.css">
  </body>
  </html>
