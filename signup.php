<?php
session_start();
  include "connection.php";
  include "functions.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    // something was posted
    // Collect information from form
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pword'];

    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){
        // save to database
        $user_id = random_num(10);
        $sql = "insert into users (user_id,firstname,lastname,email,password) values('$user_id', '$firstname', '$lastname', '$email', '$password')";
        mysqli_query($conn, $sql);
        echo "Sign Up was successful";
        header("Location: index.php");
        die();

    }else{
        echo "Please enter some valid information";
    }
    
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign Up</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">   
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
<h2>Sign Up</h2><br>
<div>
  <p>Enter your information below to create an account</p>
  <form action="" method="post" autocomplete="off" style="text-align: center">
    <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname" required><br><br>

    <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="pword">Password:</label>
    <input type="password" name="pword" id="pword" required><br><br>

    <input type="submit" value="Sign Up"><br><br>
  </form>
</div>
</body>
</html>