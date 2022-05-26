<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Server Side Data Validation" />
  <meta name="keywords" content="HTML, PHP" />
  <meta name="author" content="Adam Horvath, Sam Green"  />

  <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/sidepage.css">
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
$A32 = "CPU intensive tasks";
$A33 = "Multi-threaded applications";
$A4 = "Cluster";
$A5 = "13";
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



if (isset ($_POST["question_package"])) {
    $question_package = $_POST["question_package"];
    if ($A4 == $question_package){
        $score++;
    }
}

if (isset($_POST['question_suitable'])){
    $check_array = $_POST['question_suitable'];
    if ($check_array[0] == $A32){
        if ($check_array[1] == $A33){
            if (count($check_array) == 2){
                $score++;
            }
        }
    }
        }

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
$errMsg = "";

if (is_numeric($student_number)== false) {
    $errMsg .= "<p>Your ID must be a number.</p>";
}
else if ((1000000 > $student_number)){
    $errMsg .= "<p>Your ID has to be 7 or 10 characters.</p>";
}
else if ((9999999 < $student_number) && ($student_number < 1000000000)){
    $errMsg .= "<p>Your ID has to be 7 or 10 characters.</p>";
}
else if (($student_number > 9999999999)) {
    $errMsg .= "<p>Your ID has to be 7 or 10 characters.</p>";
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