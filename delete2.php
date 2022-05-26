<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Student Delete</title>
    <meta name="description" content="Delete student number from MYSQL table function PHP">
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
        echo "<p>You didn't choose an option</p>";
    }}
?>
</body>
</html>