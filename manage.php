<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Creating Web Applications Lab 10" />
<meta name="keywords" content="PHP, Mysql" />
<title>Quiz supervisor queries</title>
</head>
<body>
<h1>Attempts table</h1>
<?php
    require_once ("settings.php"); //connection info

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );
    // Checks if connection is successful
    
    
            // close the database connection
            mysqli_close($conn);
           // if successful database connection
?>
</body>

<h2>List All Attempts</h2>
<form method="post" action="listall.php">
    <p>Display All Students:</p>
    <p><input type="submit" name="all_attempts"></p>
</form>

<h2>Search Student Number Attempt</h2>
<form method="post" action="search.php">
    <p>Enter student number: <input type="text" name="student_number"></p>
    <p><input type="submit"></p>
</form>

<h2>Search Student Name Attempt</h2>
<form method="post" action="search.php">
    <p>Enter first name: <input type="text" name="first_name"></p>
    <p>Enter last name: <input type="text" name="last_name"></p>
    <p><input type="submit"></p>
</form>

<h2>List Students Who Got 100% On Attempt 1</h2>
<form method="post" action="search100%.php">
    <p><input type="submit" name="100%_attempts"></p>
</form>


<h2>Delete</h2>
<form method="post" action="delete.php">
    <p>Enter student number: <input type="text" name="student_number"></p>
    <p><input type="submit"></p>
</form>




</form>
</html>