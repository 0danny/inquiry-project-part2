<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Creating Web Applications Lab 10" />
<meta name="keywords" content="PHP, Mysql" />
<title>Creating connection to MySQL database</title>
</head>
<body>
<?php

use LDAP\Result;

   require_once ("settings.php"); //connection info

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );
    #$query = //selecting student number if it exists and returning number of attempts

    $sql_table ="attempts";

    $query = "select student_number FROM attempts"; 

    $result = mysqli_query($conn, $query);
    if (!$result){
        echo('no student');}
    elseif ($result >= 2){
        echo "Already greater than 2. <br> You cannot submit.";
    }
    else{
        $number_of_attempts = $number_of_attempts + 1; // we need to re-define $number_of_attempts cause it is causing a lot of problems
        $student_number = trim($_POST["student_number"]);
        $first_name = trim($_POST["first_name"]);
        $last_name = trim($_POST["last_name"]);
        $number_of_attempts = trim($_POST["number_of_attempts"]);// same here $number_of_attempts are scuffed
        $score = trim($_POST["score"]); // score not defined? 
        $date_time = (date("Y/m/d") . ' ' . date("h:i:sa")); // gets current time and posts it
        
        $query = "insert into $sql_table (date_time, first_name, last_name, student_number, number_of_attempts, score) 
        values ('$date_time', '$first_name', '$last_name', '$student_number', '$number_of_attempts', '$score')";

        // execute the query - we should really check to see if the database exists first.
            $result = mysqli_query($conn, $query);
            // checks if the execution was successful
            if(!$result) {
                echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
            } else {
                // display an operation successful message
                echo "<p class=\"ok\">Successfully added New Attempt<p>";
                require_once('manage.php');
            } // if successful query operation
        }

        // close the database connection
        @mysqli_close($conn);
        // if successful database connection
?>