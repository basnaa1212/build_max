<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin-dash.css">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul class="menu">
                <li>
                    <button class="menu-btn" onclick="toggleSubmenu('architects-menu')">Architects</button>
                    <ul id="architects-menu" class="submenu">
                        <li><a href="#add-architect">Add Architect</a></li>
                        <li><a href="#view-architects">View Architects</a></li>
                    </ul>
                </li>
                <li>
                    <button class="menu-btn" onclick="toggleSubmenu('plans-menu')">Plans</button>
                    <ul id="plans-menu" class="submenu">
                        <li><a href="#add-plan">Add Plan</a></li>
                        <li><a href="#view-plans">View Plans</a></li>
                    </ul>
                </li>
                    <li><a href="#users">Users</a></li>
                    <li><a href="#complaints">Customer Complaints</a></li>
                    <li><a href="#logout">Logout</a></li>
            </ul>
        </aside>
