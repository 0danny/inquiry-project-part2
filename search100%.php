<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Student Search</title>
    <!-- other meta here -->
</head>
<body>
<?php


require_once "settings.php";
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);
if ($conn) {
    if (isset($_POST["100%_attempts"])){
        $first_name=trim($_POST["100%_attempts"]);
        $query = "SELECT * FROM attempts WHERE score= AND last_name='$last_name'";
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
            ."<th scope=\"col\">attempt_id</th>\n "
            ."<th scope=\"col\">date_time</th>\n "
            ."<th scope=\"col\">first_name</th>\n "
            ."<th scope=\"col\">last_name</th>\n "
            ."<th scope=\"col\">student_number</th>\n "
            ."<th scope=\"col\">number_of_attempts</th>\n "
            ."<th scope=\"col\">score</th>\n "
        
            ."<tr>\n ";
        
            // retrieve current record pointed by the result pointer
        
            while ($row = mysqli_fetch_assoc ($result)) {
                echo "<tr>\n";
                echo "<td>", $row["attempt_id"], "</td>\n";
                echo "<td>", $row["date_time"], "</td>\n";
                echo "<td>", $row["first_name"], "</td>\n";
                echo "<td>", $row["last_name"], "</td>\n";
                echo "<td>", $row["student_number"], "</td>\n";
                echo "<td>", $row["number_of_attempts"], "</td>\n";
                echo "<td>", $row["score"], "</td>\n";
                
                echo "</tr>\n";
                }
        
                echo "</table>\n ";
                // Frees up the memory, after using the result pointer
                mysqli_free_result($result);
                }}
    elseif (isset($_POST["student_number"])){
        $student_number=$_POST["student_number"];
        $query = "SELECT * FROM attempts WHERE student_number=$student_number";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
            } 
        else {
            // Display the retrieved records
            echo "<table border=\"1\">\n";
            echo "<tr>\n "
            ."<th scope=\"col\">attempt_id</th>\n "
            ."<th scope=\"col\">date_time</th>\n "
            ."<th scope=\"col\">first_name</th>\n "
            ."<th scope=\"col\">last_name</th>\n "
            ."<th scope=\"col\">student_number</th>\n "
            ."<th scope=\"col\">number_of_attempts</th>\n "
            ."<th scope=\"col\">score</th>\n "
        
            ."<tr>\n ";
        
            // retrieve current record pointed by the result pointer
        
            while ($row = mysqli_fetch_assoc ($result)) {
                echo "<tr>\n";
                echo "<td>", $row["attempt_id"], "</td>\n";
                echo "<td>", $row["date_time"], "</td>\n";
                echo "<td>", $row["first_name"], "</td>\n";
                echo "<td>", $row["last_name"], "</td>\n";
                echo "<td>", $row["student_number"], "</td>\n";
                echo "<td>", $row["number_of_attempts"], "</td>\n";
                echo "<td>", $row["score"], "</td>\n";
                
                echo "</tr>\n";
                }
        
                echo "</table>\n ";
                // Frees up the memory, after using the result pointer
                mysqli_free_result($result);
                }
    }
    mysqli_close($conn);}
else {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}

?>
</body>
</html>
