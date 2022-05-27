<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Management page for quiz entries." />
    <meta name="keywords" content="PHP, Mysql" />
    <meta name="author" content="Daniel Paolone, Alister Klarica" />
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

    $password = "Node.JS";

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );
    // Checks if connection is successful

    if ($conn) {
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            $query = "CREATE TABLE `users` (
    
                `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                `username` VARCHAR(50) NOT NULL UNIQUE,
                `password` VARCHAR(255) NOT NULL,
                ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1";
    
                $result = mysqli_query($conn, $query);
        }
        
    }
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);



        if(isset($_POST["management_user"]))
        {
            if($_POST["management_user"] == $username)
            {
                echo '<style>.management_fieldset { display: none; }</style>';
                include_once ("manage.inc");
            }
            else
            {
                echo "<p style=\"padding: 10px; color: red;\">Please try something else</p>";
            }
        }


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
            <label for="management_user">Enter your username: </label> 
            <input type="username" name="management_user" placeholder="Username" max="40" size="40"/>
        <p>
        <p>
            <label for="management_pass">Enter the management password: </label> 
            <input type="password" name="management_pass" placeholder="Password... (Hint: Node.JS)" max="40" size="40"/>
        </p>
        <br>

        <input type="submit" value="Login"/>

        </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
    </form>

</fieldset>

<?php
    include_once "main_footer.inc";
?>

</body>

</html>