<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Student Change</title>
    <meta name="description" content="Change score function PHP">
    <meta name="keywords" content="PHP, HTML, MYSQL, Manage page">
    <meta name="author" content="Adam Horvath, Sam Green"/>
    <meta name="date" content="Last Modified: 26/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/quiz.css">
</head>
<body>
<?php


require_once "settings.php";
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);
if ($conn) {
    if ((isset($_POST["student_number"])) && (isset($_POST["number_of_attempts"]))){
        $student_number=trim($_POST["student_number"]);
        $number_of_attempts=trim($_POST["number_of_attempts"]);
        $query = "SELECT * FROM attempts WHERE student_number='$student_number' AND number_of_attempts='$number_of_attempts'";
        $result = mysqli_query($conn, $query);
        if (($student_number > 9999999) && ($student_number <1000000000)){
            echo "<p>The student number has to be either 7 or 10 characters</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        elseif ($student_number == ""){
            echo "<p>You have not entered a student number</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        elseif ($number_of_attempts == ""){
            echo "<p>You have not entered the number of attempts</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        elseif (($student_number == "") &&  ($number_of_attempts == "")){
            echo "<p>You have not entered both student number and number of attempts</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        elseif (($student_number == "") &&  ($score == "")){
            echo "<p>You have not entered both student number and score</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        elseif (($number_of_attempts == "") &&  ($score == "")){
            echo "<p>You have not entered both number of attempts and score</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        elseif ((($student_number == "") &&  ($number_of_attempts == "") && ($score == ""))){
            echo "<p>You have not entered student number, number of attempts and score</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        else{
        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
            echo mysqli_error($conn);
            echo mysqli_errno($conn);
            }
        else {
            if (mysqli_num_rows( $result ) !=0){
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


                    echo "<form method='post' action='update.php'>";
                    echo "<input type='hidden' name='student_number' value='$student_number'>";
                    echo "<input type='hidden' name='number_of_attempts' value='$number_of_attempts'>";
                    echo "<p>Enter score: <input type='text' name='score'></p>";
                    echo "<p><input type='submit' value='Change Score Of Attempt'></p>";
                    echo "</form>";


                    
                }
            else{
                echo("There are no attempts under student number: $student_number and number of attempts: $number_of_attempts");
            }
            }
            }
    mysqli_close($conn);}}
else {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}

?>
</body>
</html>
