<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Node JS Index">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Sam Green">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/node_logo.webp">
    <title>Node JS Index</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>

    <?php
	    include_once "header.inc";
    ?>

    <article class="index_page">
        <h2 class="header_title_index">WELCOME TO NODE.JS</h2>
        <hr class="horizontal">
        <section id="About">
            <h3 class="subheader">Brief Introduction</h3>
            <p id="intro_para">Node.JS is an open source runtime environment that allows Javascript to run on the serverside of a webpage. Node is a very powerful tool due to its inclusive opensource nature, meaning it has an extensive library of resources, and is used
                in many platforms including Windows and Mac.
            </p>


        </section>

        <section id="link_index">
            <h3>Navigation of Node Page</h3>
            <p>Navigation between pages can be found up the top of our website, or through the home page (where you are now)</p>
            <br>
            <a href="index.php">Home Page (You are here)</a>
            <br>
            <br>
            <a href="topic.php">Topic Page</a>
            <br>
            <br>
            <a href="enhancements.php">Enchancements Page</a>
            <br>
            <br>
            <a href="phpenhancements.php">PHP Enchancements Page</a>
            <br>
            <br>
            <a href="quiz.php">Quiz Page</a>
            <br>
            <br>
            <a href="loginform.php">Manage Quiz Queries Page</a>
            <br>
        </section>
        <section id="table">
            <h3 class="subheader">Where is Node.JS Used</h3>
            <table>
                <tr>
                    <th>Client Side</th>
                    <td>
                        <figure>
                            <a> <img src="images/computer.png" alt="Client-side" class="table_image"></a>
                        </figure>
                    </td>
                    <td class="table_explain">Javascript and React JS used here</td>
                </tr>
                <tr>
                    <th>Server Side</th>
                    <td>
                        <figure>
                            <a> <img src="images/server.jpg" alt="Server-side" class="table_image"></a>
                        </figure>
                    </td>
                    <td class="table_explain">PHP and <strong>Node.JS </strong>used here</td>
                </tr>
                <tr>
                    <th>Database</th>
                    <td>
                        <figure>
                            <a> <img src="images/database.jpg" alt="Database" class="table_image"></a>
                        </figure>
                    </td>
                    <td class="table_explain">My SQL and other database frameworks used here</td>
                </tr>

            </table>
        </section>


        <section id="youtube_link">
            <h3>HELP</h3>
            <a href="https://youtu.be/ExXhJDPmjts">
                <p>Part 1 Video Explaination of Webpage (Assignment Part 1)</p>
                </a>
            <a href="https://youtu.be/xAY0aZy2iy4">
                <p>Part 2 Video about PHP (Assignment Part 2)</p>
                </a>
            <br>
            <p>N.B. References can be found <a href=topic.html#footnotes>here</a></p>
        </section>

    </article>


    <?php
	    include_once "main_footer.inc";
    ?>

</body>

</html>