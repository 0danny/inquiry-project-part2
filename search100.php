<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Student Search</title>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/quiz.css">
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
    echo "Listing all students with 100% score on attempt 1:";

        $query = "SELECT student_number, first_name, last_name FROM attempts WHERE score='100' AND number_of_attempts='1'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
            echo mysqli_error($conn);
            echo mysqli_errno($conn);
            }
        else {
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

    mysqli_close($conn);}
?>
</body>
</html>
