<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Node JS Enhancements">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Adam Horvath, Sam Sharma">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/node_logo.webp">
    <title>PHP Enhancements</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/enhancements.css">
</head>
<body>
    <?php
	    include_once "header.inc";
    ?>

    <br>

    <h1 class="title">
       PHP Enhancements
    </h1>
    <br>
    <h2 class="title">
        Enhancements made during the creation of the PHP Coding process:
    </h2>

    <h3 class="title">
        Count  <!-- RENAME THIS -->
    </h3>

    <section class="paragraph">
        <p>
        This enhancement takes an array as a parameter and measures the length of it. This helped to ensure that the correct amount of checkboxes was ticked. <!-- ENTER DESCRIPTION HERE --> <a href="markquiz.php">Markquiz</a>
            <br><br>
            <img src="images/countphp.png" style="width:1000px;height: auto;" alt="Count $check_array variable">

            <br> Website used as reference: <a href="https://www.w3schools.com/php/func_array_count.asp">Click Here</a> <!-- ENTER WEBSITE SAM G USED -->
        </p>
    </section>

    <br><br>
    <h3 class="title">
    Creating an array for checkbox data  <!-- RENAME THIS -->
    </h3>

    <section class="paragraph">
        <p>
        In the html element of the quiz page, the names of the checkboxes need to be followed by array brackets, [], to ensure that all of the checkbox data is collected. <br/>
        Without these brackets, the checkbox $_POST method will just return the last checkbox value selected. (lines 114, 120, 125, 130 under ‘name=’)  <!-- ENTER DESCRIPTION HERE --> <a href="quiz.php">Quiz</a>
            <br><br>
            <img src="images/htmlarray.png" style="width:1000px;height: auto;" alt="HTML array for checkbox">

            <br> Website used as reference: <a href="https://stackoverflow.com/questions/4997252/get-post-from-multiple-checkboxes">Click Here</a> <!-- ENTER WEBSITE SAM G USED -->
        </p>
    </section>

    <br><br>
    <h3 class="title">
    Password and username login page  <!-- RENAME THIS -->
    </h3>

    <section class="paragraph">
        <p>
        The use of a login page takes the project above the expected scope and ensures that people without login credentials cannot edit the attempts database. Since the <br/> 
        usernames are set to unique within the MySQL database, visitors with malicious intent cannot make changes to the attempts database while posing as someone else.
        <a href="loginform.php">Login</a>
            <br><br>
            <img src="images/loginscreen.png" style="width:1000px;height: auto;" alt="The username and password login interface for the management page.">

            <br> Website used as reference: <a href="https://www.simplilearn.com/tutorials/php-tutorial/php-login-form">Click Here</a>
        </p>
    </section>

    <br><br>
    <h3 class="title">
    Password and username registration page  <!-- RENAME THIS -->
    </h3>

    <section class="paragraph">
        <p>
        The use of a username and password locked management page takes our project above and beyond the basic scope. The use of a username and password allows us to enter <br/>
        in and manage information for the backend portion of the website in a useable interface while keeping malicious and common users out. The username and password is <br/>
        sent in to the php which adds the information to a preexisting table, or creates one if it does not exist. This is done on the server so therefore the table storing <br/>
        the login credentials is not visible in any way to the normal users of the website.
        <a href="registerform.php">Register</a>
            <br><br>
            <img src="images/registerscreen.png" style="width:1000px;height: auto;" alt="The username and password registration interface for the management page.">
            <br> Website used as reference: <a href="https://www.simplilearn.com/tutorials/php-tutorial/php-login-form">Click Here</a>
        </p>
    </section>

    <br><br>
    <h3 class="title">
    Password reset page  <!-- RENAME THIS -->
    </h3>

    <section class="paragraph">
        <p>
        The password reset page ensures access to individuals who have forgotten their password. As an existing username is needed when making the password reset, and since <br/>
        the MySQL database where both username and password are stored for individuals users cannot be viewed unless logged in with the correct credentials, which therefore <br/>
        insures that normal users of the website cannot change the password for someone else.
        <a href="updatepasswordform.php">Reset Password</a>
            <br><br>
            <img src="images/passwordresetscreen.png" style="width:1000px;height: auto;" alt="The password reset interface for the management page.">
            <br> Website used as reference: <a href="https://www.simplilearn.com/tutorials/php-tutorial/php-login-form">Click Here</a>
        </p>
    </section>

    <?php
	    include_once "main_footer.inc";
    ?>
</body>
</html>