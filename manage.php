<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Creating Web Applications Lab 10" />
    <meta name="keywords" content="PHP, Mysql" />
    <title>Quiz supervisor queries</title>

    <link rel="icon" href="images/node_logo.webp">
    <title>Node JS Manage Page</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/manage.css">
</head>

<body>

<?php
    include_once ("header.inc");
    require_once ("settings.php"); //connection info

    $password = "helloworld";

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );
    // Checks if connection is successful
    
    if(isset($_POST["management_pass"]))
    {
        if($_POST["management_pass"] == $password)
        {
            echo '<style>.management_fieldset { display: none; }</style>';
            include_once ("manage.inc");
        }
        else
        {
            echo "<p style=\"padding: 10px; color: red;\">The password you have entered is incorrect.</p>";
        }
    }
    
    // close the database connection
    mysqli_close($conn);
    // if successful database connection

?>


<fieldset class="management_fieldset">
    <legend>Password Form</legend>
            
    <form method="post" action="manage.php" class="management_form">
        <p>
            <label for="management_pass">Enter the management password: </label> 
            <input type="password" name="management_pass" placeholder="Password..." max="40" size="40"/>
        </p>
        <br>

        <input type="submit" value="Login"/>
    </form>

</fieldset>

<?php
    include_once "main_footer.inc";
?>

</body>

</html>