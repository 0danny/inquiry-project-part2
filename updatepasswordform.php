<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Reset Password</title>
    <meta name="description" content="Reset user password form" />
    <meta name="keywords" content="HTML, PHP" />
    <meta name="author" content="Adam Horvath" />
    <meta name="date" content="Last Modified: 27/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp"/>
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
    <legend>Password Reset Form</legend>
            
    <form method="post" action="updatepassword.php" class="management_form">
        <p>
            <label for="management_pass">Enter your username: </label> 
            <input type="text" name="management_username" max="40" size="40"/>
        </p>
        <p>
            <label for="management_pass">Enter new password: </label> 
            <input type="text" name="management_pass" max="40" size="40"/>
        </p>
        <br>

        <input type="submit" value="Login"/>
    </form>

</fieldset>

<?php
    include_once "main_footer.inc"; // common footer
?>

</body>
</html>