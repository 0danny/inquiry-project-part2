<?php
    $host = "feenix-mariadb.swin.edu.au";
    $user = "s103968787"; // your user name
    $pwd = "MyS3QU3L"; // your password (date of birth ddmmyy unless changed)
    $sql_db = "s103968787_db"; // your database

    $conn = @mysqli_connect($host,
        $user,
        $pwd,
        $sql_db
    );
?>
