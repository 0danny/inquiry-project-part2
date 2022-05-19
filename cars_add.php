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
   require_once ("settings.php"); //connection info

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );

    $make = trim($_POST["carmake"]);
    $model = trim($_POST["carmodel"]);
    $price = trim($_POST["price"]);
    $yom = trim($_POST["yom"]);

    $query = "insert into $sql_table (make, model, price, yom) values ('$make', '$model', '$price',
    '$yom')";
    // execute the query - we should really check to see if the database exists first.
        $result = mysqli_query($conn, $query);
        // checks if the execution was successful
        if(!$result) {
            echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
        } else {
            // display an operation successful message
            echo "<p class=\"ok\">Successfully added New Car record<p>";
        } // if successful query operation

        // close the database connection
        mysqli_close($conn);
        // if successful database connection
?>
