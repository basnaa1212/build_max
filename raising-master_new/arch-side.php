<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Dashboard</title>
    <link rel="stylesheet" href="admin-dash.css">
</head>
<body>
            <div class="dashboard">
        <aside class="sidebar">
            <h2>Architect Dashboard</h2>
            <ul class="menu">
                
                    <li><a href="arch-profile.php">Profile</a></li>
                    <li><a href="arch-viewbookeduser.php"> Booked Users</a></li>
                            
                 <li>
                    <button class="menu-btn" onclick="toggleSubmenu('plan-menu')">Plans</button>
                    <ul id="plan-menu" class="submenu">
                        <li><a href="addplan.php">Add Plan</a></li>
                        <li><a href="viewplan.php">View Plan</a></li>
                    </ul>
                </li>
                <li>
                    <button class="menu-btn" onclick="toggleSubmenu('interiordesign-menu')">Interior Design</button>
                    <ul id="interiordesign-menu" class="submenu">
                        <li><a href="adddesign.php">Add Interiordesign</a></li>
                        <li><a href="viewdesign.php">View Interiordesign</a></li>
                    </ul>
                </li>
                <li>
                    <button class="menu-btn" onclick="toggleSubmenu('schedule-menu')">My Schedule</button>
                    <ul id="schedule-menu" class="submenu">
                        <li><a href="arch-schedule.php">Add Schedule</a></li>
                        <li><a href="viewarch-schedule.php">View Schedule</a></li>
                    </ul>
                </li>


                <!--li><a href="arch-updates.php"> Updates</a></li-->
                <li><a href="chatarea.php"> Message</a></li>
                    <li><a href="logout.php">Logout</a></li>
            </ul>

        </aside>

