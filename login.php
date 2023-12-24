<!DOCTYPE html>
<?php
session_start();
include "connection.php";
include "functions.php";
?>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
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
        <h2>Log In</h2><br><br>
        <p style="text-align: center;">Enter your login credentials below</p><br><br>
        <form style="text-align: center" action="" method = "post" autocomplete="off">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            
            <label for="pword">Password:</label><br>
            <input type="password" id="pword" name="pword"><br><br>

            <input type="submit" value="Log In"><br><br>
        </form>
        <p style="text-align: center;">Don't have an account? <a href="signup.php" class="button-blue">Sign up here!</a></p>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST['email'];
                $pword = $_POST['pword'];
                if(!empty($email)){
                  // read from database
                  // Checks if the email address exists in the database
                  $sql = "select * from users where email='$email' limit 1";
                  $result = mysqli_query($conn, $sql);  
                  if($result){
                    if ($result && mysqli_num_rows($result) > 0){
                      $user_data = mysqli_fetch_assoc($result);
                      if($user_data['password'] === $pword)
                      {  
                        $id = $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                  }
                  // Echos under the submit button
                    echo "Wrong username or password!";
                  }else{
                      echo "Please enter some valid information!";
                    }  
                  }
                }
        ?>
    </body>
</html>