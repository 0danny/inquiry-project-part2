<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Creating Web Applications Lab 10" />
<title>Student Search</title>
    <meta name="description" content="Search function PHP">
    <meta name="keywords" content="PHP, HTML, MYSQL, Manage page">
    <meta name="author" content="Adam Horvath, Sam Green"/>
    <meta name="date" content="Last Modified: 26/5/22"/>
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
if ($conn) {
    // disallows attempt if score is equal to 0
    if ($score == 0 ) {
        echo "Your score is 0. Please modify your answer.";
        exit();
    }

    #$query = //selecting student number if it exists and returning number of attempts
    $student_number = trim($_POST["student_number"]);
    $sql_table ="attempts";

    $query = "SELECT number_of_attempts FROM attempts WHERE student_number = $student_number ORDER BY attempt_id DESC"; 
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);

    if ($row[0] >= 2){
        echo "Attempts already greater than 2. <br> You cannot submit another attempt.";
    }
    else{
        if (!$row){
            $number_of_attempts = 1;
        }
        if ($row[0] == 1){
            $number_of_attempts = 2;
        }
            $student_number = trim($_POST["student_number"]);
            $first_name = trim($_POST["first_name"]);
            $last_name = trim($_POST["last_name"]);
            $date_time = (date("Y/m/d") . ' ' . date("h:i:sa")); // gets current time and posts it
            $score = ($score/5)*100;
            
            $query = "insert into $sql_table (date_time, first_name, last_name, student_number, number_of_attempts, score) 
            values ('$date_time', '$first_name', '$last_name', '$student_number', '$number_of_attempts', '$score')";

            // execute the query - we should really check to see if the database exists first.
                $result = mysqli_query($conn, $query);
                // checks if the execution was successful
                
                if(!$result) {
                    echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
                } 
                else {
                    $query = "SELECT * FROM attempts WHERE student_number='$student_number' AND number_of_attempts='$number_of_attempts' AND score='$score'";
                    $result = mysqli_query($conn, $query);
                    if (!$result) {
                        echo "<p>Something is wrong with ", $query, "</p>";
                        echo mysqli_errno($conn);
                        echo mysqli_error($conn);
                    } 
                    else{
                        // display an operation successful message
                        echo "<p class=\"ok\">Successfully added New Attempt<p>";
                        // Display the retrieved records
                        echo "<table border=\"1\">\n";
                        echo "<tr>\n "
                        ."<th scope=\"col\">attempt_id</th>\n "
                        ."<th scope=\"col\">date_time</th>\n "
                        ."<th scope=\"col\">first_name</th>\n "
                        ."<th scope=\"col\">last_name</th>\n "
                        ."<th scope=\"col\">student_number</th>\n "
                        ."<th scope=\"col\">number_of_attempts</th>\n "
                        ."<th scope=\"col\">score (%)</th>\n "
                    
                        ."<tr>\n ";
                    
                        // retrieve current record pointed by the result pointer
                    
                        while ($row = mysqli_fetch_assoc ($result)) {
                            echo "<tr>\n";
                            echo "<td>", $row["attempt_id"], "</td>\n";
                            echo "<td>", $row["date_time"], "</td>\n";
                            echo "<td>", $row["first_name"], "</td>\n";
                            echo "<td>", $row["last_name"], "</td>\n";
                            echo "<td>", $row["student_number"], "</td>\n";
                            echo "<td>", $row["number_of_attempts"], "</td>\n";
                            echo "<td>", $row["score"], "</td>\n";
                            
                            echo "</tr>\n";
                            }
                    
                            echo "</table>\n ";
                            // Frees up the memory, after using the result pointer
                            mysqli_free_result($result);
                            
                            require_once('return_button.inc');
                    }}
                } // if successful query operation
}
else {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}
        // close the database connection
        @mysqli_close($conn);
        // if successful database connection
?>
</body>
</html>