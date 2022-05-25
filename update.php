<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Student Search</title>
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
    if ((isset($_POST["student_number"])) && (isset($_POST["number_of_attempts"]) && (isset($_POST["score"])))){
        $student_number=trim($_POST["student_number"]);
        $number_of_attempts=trim($_POST["number_of_attempts"]);
        $score=trim($_POST["score"]);
        $query = "UPDATE attempts SET score='$score' WHERE student_number='$student_number' AND number_of_attempts='$number_of_attempts'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
            echo mysqli_error($conn);
            echo mysqli_errno($conn);
            }
        else {
            echo "New score is $score%";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
    }
    mysqli_close($conn);}
else {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}}

?>
</body>
</html>

