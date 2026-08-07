<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin-dash.css">
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul class="menu">
                <li>
                    <button class="menu-btn" onclick="toggleSubmenu('architects-menu')">Architects</button>
                    <ul id="architects-menu" class="submenu">
                        <li><a href="addarchitect.php">Add Architect</a></li>
                        <li><a href="viewarchitect.php">View Architects</a></li>
                    </ul>
                </li>
                    <li><a href="adminviewplan.php">Architect Details</a></li>
                    <li>
                    <button class="menu-btn" onclick="toggleSubmenu('plantype-menu')">PlanType</button>
                    <ul id="plantype-menu" class="submenu">
                        <li><a href="plantype.php">Add Plan</a></li>
                        <li><a href="viewplantype.php">View Plan</a></li>
                    </ul>
                    </li>
                    <li>
                    <button class="menu-btn" onclick="toggleSubmenu('interiordesigntype-menu')">InteriorDesign Type</button>
                    <ul id="interiordesigntype-menu" class="submenu">
                        <li><a href="designtype.php">Add InteriorDesign</a></li>
                        <li><a href="viewdesigntype.php">View InteriorDesign</a></li>
                    </ul>
                    <li>
                    <li><a href="viewuser.php">Users</a></li>
                    <li><a href="adminviewbooking.php">Booking request</a></li>
                    <li><a href="chatarea.php">Message</a></li-->
                    <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>
