<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Update Search</title>
    <meta name="description" content="Update the MYSQL table function PHP">
    <meta name="keywords" content="PHP, HTML, MYSQL, Manage page">
    <meta name="author" content="Adam Horvath, Sam Green"/>
    <meta name="date" content="Last Modified: 26/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/sidepage.css">
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
    if ((isset($_POST["student_number"])) && (isset($_POST["number_of_attempts"]) && (isset($_POST["score"])))){
        $student_number=trim($_POST["student_number"]);
        $number_of_attempts=trim($_POST["number_of_attempts"]);
        $score=trim($_POST["score"]);
        $query = "UPDATE attempts SET score='$score' WHERE student_number='$student_number' AND number_of_attempts='$number_of_attempts'";
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
                if (!$result) {
                    echo "<p>Something is wrong with ", $query, "</p>";
                    echo mysqli_error($conn);
                    echo mysqli_errno($conn);
                    }
                else {
                    echo "<p>New score is $score%</p>";
                    echo "<form method='post' action='manage.php'>";
                    echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
                    echo "</form>";
                }
            mysqli_close($conn);}
        }}}
else {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}

?>
</body>
</html>