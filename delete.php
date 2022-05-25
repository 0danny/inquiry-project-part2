<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>PHP Delete</title>
    <!-- other meta here -->
</head>
<body>
<?php
if (!isset($_POST["student_number"])) {
    header("location:manage.php");
    exit();
}
$student_number=$_POST["student_number"];
require_once "settings.php";
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);
if ($conn) {
    echo "<p>Connection successful!<p>";
    $query = "DELETE FROM attempts WHERE student_number=$student_number";
    $result = mysqli_query($conn, $query);
    echo $query;
    if ($result) {
        echo "<p>delete operation successful!</p>";
        header("location:manage.php");
    }
    else {
        echo "<p>delete operation unsuccessful!</p>";
    }
    mysqli_close($conn);
}
else {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}
?>
</body>
</html>
