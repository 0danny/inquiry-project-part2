<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <meta name="description" content="Login page for management of quiz entries form." />
    <meta name="keywords" content="HTML, PHP" />
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
    include_once ("header.inc"); // common header
?>

<!-- Username and Password input -->

<fieldset class="management_fieldset">
    <legend>Login Form</legend>
            
    <form method="post" action="login.php" class="management_form">
        <p>
            <label for="management_pass">Enter username: </label> 
            <input type="text" name="management_username" placeholder="Username..." max="40" size="40"/>
        </p>
        <p>
            <label for="management_pass">Enter password: </label> 
            <input type="text" name="management_pass" placeholder="Password..." max="40" size="40"/>
        </p>
        <br>

        <input type="submit" value="Login"/>
    </form>

</fieldset>
<br>
<section>
    <!-- Redirects the user to the registration page -->
    <p class="redirect">Don't have an account yet? <a href="registerform.php">Register here</a></p>
    <!-- Redirects the user to the password reset page  -->
    <p class="redirect">Forgot password? <a href="updatepasswordform.php">Reset here</a></p>
</section>


<?php
    include_once "main_footer.inc"; // common footer
?>

</body>

</html>