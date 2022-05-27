<head> 
    <meta charset="utf-8"/>
    <title>Node JS Manage Page</title>
    <meta name="description" content="Posting quiz entries." />
    <meta name="keywords" content="HTML, PHP" />
    <meta name="author" content="Adam Horvath, Sam Green" />
    <meta name="date" content="Last Modified: 27/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/manage.css">
<head>

<?php
require_once("header.inc");
?>
  
  <div class="manage-container">
        <h3 class="subheader">Manage Page</h3>

        <form method="post" action="listall.php" class="manage_form">
            <p>
                <input type="submit" name="all_attempts" class="manage_form_allattempts" value="List All Attempts">
            </p>
        </form>

        <fieldset>
            <legend>Search student by number</legend>
            
            <form method="post" action="search.php" class="manage_form">
            <p>
                <label for="student_number">Enter student number:</label> 
                <input type="text" name="student_number" minlength="7" maxlength="10" pattern=".{7,10}" placeholder="Type student id..."/>
            </p>
            <br>

            <input type="submit" value="Search Student Number Attempt"/>
            </form>

        </fieldset>

        <fieldset>
            <legend>Search student by name</legend>
            <form method="post" action="search.php" class="manage_form">
                <p>
                    <label for="first_name">Enter first name:</label>
                    <input type="text" name="first_name" maxlength="30" pattern="[a-zA-Z]+" placeholder="Type first name..."/>
                </p>
                <p>
                    <label for="last_name">Enter last name:</label>
                    <input type="text" name="last_name" maxlength="30" pattern="[a-zA-Z]+" placeholder="Type last name..."/>
                </p>
                <br>
                <input type="submit" value="Search Student Name Attempt"/>
            </form>
        </fieldset>

        <fieldset>
            <legend>Search student by percentage %</legend>
            <form method="post" action="search100.php" class="manage_form">
                <p>
                    <input type="submit" value="List Students Who Got 100% On Attempt 1" name='100'/>
                </p>
            </form>

            <form method="post" action="search50.php" class="manage_form">
                <p>
                    <input type="submit" value="List Students Who Got Less Than 50% On Attempt 2"/>
                </p>
            </form>
        </fieldset>

        <fieldset>
            <legend>Delete attempt by ID</legend>
            <form method="post" action="delete.php" class="manage_form"> <!-- Links to delete.php -->
                <p>
                    <label for="first_name">Enter student number:</label>
                    <input type="text" name="student_number" minlength="7" maxlength="10" pattern=".{7,10}" placeholder="Type student id..."/>
                </p>
                <br>
                <input type="submit" value="Delete"/>
            </form>
        </fieldset>

        <fieldset>
            <legend>Update student score</legend>
            <form method="post" action="change.php" class="manage_form"> <!-- Links to change.php -->
                <p>
                    <label for="first_name">Enter student number:</label>
                    <input type="text" name="student_number" minlength="7" maxlength="10" pattern=".{7,10}" placeholder="Type student id..."/>
                </p>
                <p>
                    <label for="number_of_attempts">Select attempt number:</label>
                    <input type="number" name="number_of_attempts" min="1" max="2"/>
                </p>
                <br>
                <input type="submit" value="Change Score Of Attempt"/>
            </form>
        </fieldset>
    </div>

<?php
require_once("main_footer.inc");
?>