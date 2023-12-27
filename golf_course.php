<!DOCTYPE html>
<?php
session_start();
    include "connection.php";
    include "functions.php";
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
        <h1>Golf Courses</h1>
        <h2>List of Courses Added</h2>
        <?php
            $course = "SELECT * FROM g_course"; 
            $result = mysqli_query($conn, $course);
            // Check if the DB is empty
            if (!$result) {
                echo "<p>No courses have been added.</p>";
            }else{
                // Loop through all courses
                while ($course = mysqli_fetch_array($result)) {
                    $course_name = $course['name'];
                    $course_loc = $course['location'];
                    $course_type = $course['course_type'];
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>Name: $course_name</td>";
                    echo "<td>Location: $course_loc</td>";
                    echo "<td>Course Type: $course_type</td>";
                    echo "<td>View Course: <a class= href=course.php?course_id=$course_id>View</a>";
                    echo "</tr>";
                    echo "</table>";}
            }
            mysqli_close($conn);
        ?>

        <h3>Want to add a course? <a href="">Click Here!</a></h3>
        
        <script src="" async defer></script>
    </body>
</html>