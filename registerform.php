<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <meta name="description" content="User registration page." />
    <meta name="keywords" content="HTML/PHP" />
    <meta name="author" content="Adam Horvath" />
    <meta name="date" content="Last Modified: 27/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/manage.css">
</head>

<body>
<?php
    include_once ("header.inc");
?>

<fieldset class="management_fieldset">
    <legend>Registration Form</legend>

    <!-- Username and Password input -->
            
    <form method="post" action="register.php" class="management_form">
        <p>
            <label for="management_pass">Enter username: </label> 
            <input type="text" name="management_username" placeholder="Username..." max="40" size="40"/>
        </p>
        <p>
            <label for="management_pass">Enter password: </label> 
            <input type="text" name="management_pass" placeholder="Password..." max="40" size="40"/>
        </p>
        <br>

        <input type="submit" value="Register"/>
    </form>

<!-- redirects the user to the login page -->   
</fieldset>
<br>
<section>
    <p class="redirect">Already have an account? <a href="loginform.php">Login here</a></p>
</section>

<?php
    include_once "main_footer.inc";
?>

</body>

</html>