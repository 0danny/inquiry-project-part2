<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Login PHP code." />
    <meta name="keywords" content="PHP, Mysql" />
    <meta name="author" content="Daniel Paolone, Adam Horvath" />
    <meta name="date" content="Last Modified: 27/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/manage.css">
</head>

<body>

<?php
    require_once("header.inc"); // common header
    require_once ("settings.php"); //connection info

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );

    // selects table 
    $sql_table="users";

    
    // Checks if connection is successful
if ($conn) {
    if(isset($_POST["management_pass"])) {
    $username = trim($_POST["management_username"]);
    $password = trim($_POST["management_pass"]);
    $query = "SELECT username AND password FROM users WHERE username ='$username' AND password ='$password'"; // checks if the username and password match or exist
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "<p>You do not have an account under the user ", $username, "</p>"; // throws error if it cannot connect execute the query
        }
    else {
        if (mysqli_num_rows( $result ) !=0){ // checks if the query made matches the rows of the MySQL table
            echo '<style>.management_fieldset { display: none; }</style>';
            include_once ("manage.php"); // redirects the user granted the username and password are in the database
        }
        else
            {
                // throws error if the username and password do not match or exist
            echo "<p style=\"padding: 10px; color: red;\">The password you have entered is either incorrect or no account exists under user ", $username , ".</p>";
            }
        mysqli_free_result($result); 
    }}}

?>

<?php
    require_once("main_footer.inc"); // common footer
?>
