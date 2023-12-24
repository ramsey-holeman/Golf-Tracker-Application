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
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="account.php">My Account</a></li>
                    <li><a href="golf_course.php">Golf Courses</a></li>
                    <li><a href="add_round.php">Add a Round</a></li>
                    <li style="float: right;"><a href="log_out.php" style="text-align: right;">Log Out</a></li>
                </ul>
            </nav>
        </header>
    </head>
    <body>
        <h1>Add a Round</h1>
        
        <script src="" async defer></script>
    </body>
</html>