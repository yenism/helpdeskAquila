<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Helpdesk Aquila</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="sidebar">
        <div class="logo-name">
            <div class="logo-image">
                <img src="logo.png" alt="">
            </div>

            <span class="logo_name">Helpdesk</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="fa fa-home"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="#">
                    <i class="fa fa-clock-o"></i>
                    <span class="link-name">Recent Activity</span>
                </a></li>
                <li><a href="#">
                    <i class="fa fa-user-o"></i>
                    <span class="link-name">User</span>
                </a></li>
                <li><a href="#">
                    <i class="fa fa-list-alt"></i>
                    <span class="link-name">Total Keluhan</span>
                </a></li>
            </ul>

            <ul class="logout-mod">
                <li><a href="#">
                    <i class="fa fa-sign-out"></i>
                    <span class="link-name">Logout</span>
                </a></li>
            </ul>

        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="fa fa-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <img src="data:image/jpeg;base64,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" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                <i class="fa fa-dashboard"></i>
                 <span class="text">Dashboard </span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa fa-user-o"></i><br>
                        <span class="text">Total Customer</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box1">
                        <i class="fa fa-list-alt"></i><br>
                        <span class="text">Total Keluhan</span>
                        <span class="number">17,678</span>
                    </div>
                </div>
            </div>

        <body>
            <div class="activity">
                <div class="title">
                    <i class="fa fa-clock-o"></i>
                    <span class="text">Recent Activity</span>
                </div>
                
                <div class="activity-data">
                    <div class="data names">

                    <table width='320%' border=1>

                    <link rel="stylesheet" href="style.css">

                    <h3>Data Keluhan</h3>
 
             <tr>
                    <th>Nama</th> <th>Keluhan</th> <th>Tanggal</th> <th>Status</th> <th>Update</th> 
            </tr>
            <?php  
                while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['keluhan']."</td>";
                echo "<td>".$user_data['tanggal']."</td>";  
                echo "<td>".$user_data['status']."</td>";      
                echo "<td><a href='edit.php?id=$user_data[id]' class='btn-update'>Edit</a> | <a href='delete.php?id=$user_data[id]' class='btn-delete'>Delete</a></td></tr>";     
            }
                ?>
            </table>
            <script src="admin.js"></script>
            <a href="add.php"></a><br/><br/>
         </body>
        </html>
