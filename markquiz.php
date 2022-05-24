<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Server Side Data Validation" />
  <meta name="keywords" content="HTML, PHP" />
  <meta name="author" content="Adam Horvath"  />
</head>

<body>
<!--Begin processing-->
<?php
require_once ("settings.php"); //connection info
$conn = @mysqli_connect(
    $host,
    $user,
    $pwd,
    $sql_db
);

function sanitise_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//ANSWERS
$A1 = "JavaScript";
$A2 = "All of the above";
$A31 = "Writing server-side applications";
$A32 = "CPU intensive tasks";
$A33 = "Multi-threaded applications";
$A34 = "Real time communication";
$A4 = "Cluster";
$A5 = "1";
$score = 0;

//Checks if process was triggered by a form submit, if not display an error message
if (isset ($_POST["student_number"])) {
    $student_number = $_POST["student_number"];
}

else {
    //Redirect to form, if process not triggered by a form submit
    header ("location: quiz.php");
}

//assign the rest of the form values to PHP variables here...
if (isset ($_POST["first_name"])) {
    $first_name = $_POST["first_name"];
}

if (isset ($_POST["last_name"])) {
    $last_name = $_POST["last_name"];
} 

if (isset ($_POST["question_framework"])) {
    $question_framework = $_POST["question_framework"];
    if ($A1 == $question_framework){
        $score++;
    }
    }


if (isset ($_POST["question_language"])) {
    $question_language = $_POST["question_language"];
    if ($A2 == $question_language){
        $score++;
    }
}

if (isset ($_POST["question_suitable"])) {
    $question_suitable_cpu_intensive = $_POST["question_suitable_cpu_intensive"];
    if ($question_suitable_cpu_intensive == $A32){
        echo '2';

        if (isset ($_POST["question_suitable"])) {
            $question_suitable_threaded = $_POST["question_suitable_threaded"];
            if ($question_suitable_threaded == $A33){
                echo '3';

                if (isset ($_POST["question_suitable"])) {
                    $question_suitable_server_side = $_POST["question_suitable_server_side"];
                    if ($question_suitable_server_side == $A33){
                        echo '1';

                        if (isset ($_POST["question_suitable"])) {
                            $question_suitable_realtime = $_POST["question_suitable_realtime"];
                            if ($question_suitable_realtime != $A31){
                                echo '4';}}}}

                $score++;}}}}

if (isset ($_POST["question_package"])) {
    $question_package = $_POST["question_package"];
    $question_package = sanitise_input($question_package);
    $A4 = sanitise_input($A4);
    if ($A4 == $question_package){
        $score++;
        echo 'hello1';
    }
}
echo $A4;
echo $question_package;

if (isset ($_POST["question_years"])) {
    $question_years = $_POST["question_years"];
    if ($A5 == $question_years){
        $score++;
    }
}

$student_number = sanitise_input($student_number);
$first_name = sanitise_input($first_name);
$last_name = sanitise_input($last_name);
$question_framework = sanitise_input($question_framework);
$question_language = sanitise_input($question_language);
#$question_suitable = sanitise_input($question_suitable);

$errMsg = "";

if (is_numeric($student_number)== false) {
    $errMsg .= "<p>Your ID must be a number.</p>";
}
else if ((1000000 > $student_number)){
    $errMsg .= "<p>Has to be 7 or 10 characters.</p>";
}
else if ((9999999 < $student_number) && ($student_number < 1000000000)){
    $errMsg .= "<p>Has to be 7 or 10 characters.</p>";
}
else if (($student_number > 9999999999)) {
    $errMsg .= "<p>Has to be 7 or 10 characters.</p>";
}


if ($first_name=="") {
    $errMsg .= "<p>You must enter your first name.</p>";
}
else if (!preg_match("/^[a-zA-Z]*$/",$first_name)) {
    $errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
}
if ($last_name=="") {
    $errMsg .= "<p>You must enter your last name.</p>";
}
else if (!preg_match("/^[a-zA-Z]*$/",$last_name)) {
    $errMsg .= "<p>Only alpha letters allowed in your last name.</p>";
}
if ($question_framework=="") {
    $errMsg .= "<p>You must enter a programming language.</p>";
}

if ($errMsg !=""){
    echo "<p>$errMsg</p>";
}

else {
    include_once ("attempts_add.php");
}
?>
</body>
</html>