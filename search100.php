<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Search 100%</title>
    <meta name="description" content="Search for 100% on first attempt function PHP">
    <meta name="keywords" content="PHP, HTML, MYSQL, Manage page">
    <meta name="author" content="Adam Horvath, Sam Green"/>
    <meta name="date" content="Last Modified: 26/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/sidepage.css">
</head>
<body>
<?php


require_once "settings.php";
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);

if (!$conn) {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}
else{
    // Upon successful connection
    echo "<p>Listing all students with 100% score on attempt 1:</p>";

        $query = "SELECT student_number, first_name, last_name FROM attempts WHERE score='100' AND number_of_attempts='1'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
            echo mysqli_error($conn);
            echo mysqli_errno($conn);
            }
        else {
            if (mysqli_num_rows( $result ) !=0){
                // Display the retrieved records
                echo "<table border=\"1\">\n";
                echo "<tr>\n "
                ."<th scope=\"col\">student_number</th>\n "
                ."<th scope=\"col\">first_name</th>\n "
                ."<th scope=\"col\">last_name</th>\n "
                ."<tr>\n ";
            
                // retrieve current record pointed by the result pointer
            
                while ($row = mysqli_fetch_assoc ($result)) {
                    echo "<tr>\n";
                    echo "<td>", $row["student_number"], "</td>\n";
                    echo "<td>", $row["first_name"], "</td>\n";
                    echo "<td>", $row["last_name"], "</td>\n";
                    echo "</tr>\n";
                    }
            
                    echo "</table>\n ";
                    // Frees up the memory, after using the result pointer
                    mysqli_free_result($result);
                    }

            else{
                echo("<p>There are no attempts currently for students with less than 50% score on attempt 2. Please complete the quiz first.</p>");
                echo "<form method='post' action='manage.php'>";
                echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
                echo "</form>";
            }

    mysqli_close($conn);}}
?>
</body>
</html>
