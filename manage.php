<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Creating Web Applications Lab 10" />
<meta name="keywords" content="PHP, Mysql" />
<title>Retrieving records to HTML</title>
</head>
<body>
<h1>Creating Web Applications - Lab10</h1>
<?php
    require_once ("settings.php"); //connection info

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );
    // Checks if connection is successful
    if (!$conn) {
        // Displays an error message
        echo "(<p>Database connection failure</p>"; // not in production script
        } else {
        // Upon successful connection
    
        $sql_table="attempts";
    
        // Set up the SQL command to query or add data into the table
        $query = "select attempt_id, date_time, first_name, last_name, student_number, number_of_attempts, score FROM attempts ORDER BY date_time, student_attempts";
    
        // execute the query and store result into the result pointer
        $result = mysqli_query ($conn, $query);
    
        // checks if the execution was successful
        if (!$result) {
        echo "<p>Something is wrong with ", $query, "</p>";
        } else {
        // Display the retrieved records
        echo "<table border=\"1\">\n";
        echo "<tr>\n "
        ."<th scope=\"col\">attempt_id</th>\n "
        ."<th scope=\"col\">date_time</th>\n "
        ."<th scope=\"col\">first_name</th>\n "
        ."<th scope=\"col\">last_name</th>\n "
        ."<th scope=\"col\">student_number</th>\n "
        ."<th scope=\"col\">number_of_attemps</th>\n "
        ."<th scope=\"col\">score</th>\n "

        ."<tr>\n ";
    
        // retrieve current record pointed by the result pointer
    
        while ($row = mysqli_fetch_assoc ($result)) {
            echo "<tr>\n";
            echo "<td>", $row["attempt_id"], "</td>\n";
            echo "<td>", $row["date_time"], "</td>\n";
            echo "<td>", $row["first_name"], "</td>\n";
            echo "<td>", $row["last_name"], "</td>\n";
            echo "<td>", $row["student_number"], "</td>\n";
            echo "<td>", $row["number_of_attemps"], "</td>\n";
            echo "<td>", $row["score"], "</td>\n";
            
            echo "</tr>\n";
            }
    
            echo "</table>\n ";
            // Frees up the memory, after using the result pointer
            mysqli_free_result($result);
            }   // if successful query operation
    
            // close the database connection
            mysqli_close($conn);
        }   // if successful database connection
?>
</body>
</html>