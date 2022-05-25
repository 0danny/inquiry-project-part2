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

if (!$conn) {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}
else {
    if (isset($_POST['answer'])){
        $answer = ($_POST['answer']);
        if($answer == 'no'){
            echo "Attempts kept.";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
            
            exit();}
        elseif($answer == 'yes'){
            $student_number = $_POST['student_number'];
            $query = "DELETE FROM attempts WHERE student_number=$student_number";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<p>delete operation successful!</p>";
            
            }
            else {
                echo "<p>delete operation unsuccessful!</p>";}}}
    else{
        echo "You didn't choose an option";
    }}
?>
</body>
</html>