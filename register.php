<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Registration PHP code." />
    <meta name="keywords" content="PHP, Mysql" />
    <meta name="author" content="Daniel Paolone, Adam Horvath" />
    <meta name="date" content="Last Modified: 27/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/manage.css">
</head>

<body>

<?php
    require_once ("header.inc");
    require_once ("settings.php"); //connection info

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );
    if ($conn) {
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            $query = "CREATE TABLE `users` (
            `attempt_id` INT(11) NOT NULL AUTO_INCREMENT,
            `username` VARCHAR(50) NOT NULL UNIQUE,
            `password` VARCHAR(255) NOT NULL,
            `date_time` TEXT NOT NULL,
            PRIMARY KEY (`attempt_id`))
            ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1";

            $result = mysqli_query($conn, $query);
        }}

    // selects table 
    $sql_table="users";
    // sets password and username to user input
    $username = trim($_POST["management_username"]);
    $password = trim($_POST["management_pass"]);
    $date_time = (date("Y/m/d") . ' ' . date("h:i:sa")); // gets current time and posts it
    
    $query = "insert into $sql_table (username, password, date_time) 
            values ('$username', '$password', '$date_time')";
    // execute the query - we should really check to see if the database exists first.
    $result = mysqli_query($conn, $query);
    // checks if the execution was successful
    
    if(!$result) {
        echo "<p style=\"padding: 10px; color: red;\"> An account for user ", $username, " already exists.</p>";
    }
    else {
        require_once("manage.php");
    }

    // close the database connection
    mysqli_close($conn);
    // if successful database connection

?>

<?php
require_once ("main_footer.inc");
?>