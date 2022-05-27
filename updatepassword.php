<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <meta name="description" content="Reset user password">
    <meta name="keywords" content="PHP, MYSQL">
    <meta name="author" content="Adam Horvath"/>
    <meta name="date" content="Last Modified: 27/5/22"/>
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
    if ((isset($_POST["management_username"])) && (isset($_POST["management_pass"]))){ //checks if variables are set
        $username=trim($_POST["management_username"]); //posts username
        $password=trim($_POST["management_pass"]); // posts password
        $query = "UPDATE users SET password='$password' WHERE username ='$username'"; // makes query to update the password for the unique username
        $result = mysqli_query($conn, $query);

        echo "<p>New password has been saved</p>";
        echo "<form method='post' action='loginform.php'>";
        echo "<p><input type='submit' value='Return to login page'></p>"; // returns user to login page
        echo "</form>";

    }
    else{
        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
            }
        mysqli_close($conn);}

}
else {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}
?>
</body>
</html>