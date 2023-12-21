<!DOCTYPE html>
<?php
session_start();
    include "connection.php";
    include "functions.php";
    // $user_data = checkLoginStatus();
    $user_data = check_login($conn);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">My Account</a></li>
                <li><a href="">Golf Courses</a></li>
                <li><a href="">Add a Round</a></li>
                <li><a href="log_out.php" style="text-align: right;">Log Out</a></li>
            </ul>
        </nav>
    </div>
    <body>
        <h1>Welcome <php  ?></h1>
        
        <script src="" async defer></script>
    </body>
</html>