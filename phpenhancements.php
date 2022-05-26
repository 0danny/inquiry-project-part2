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

    <?php
	    include_once "main_footer.inc";
    ?>
</body>
</html>