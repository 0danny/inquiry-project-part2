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
$score = 0;

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
$A1 = $_POST["JavaScript"];
$A2 = $_POST["All of the above"];
$A3 = $_POST[""];
$A4 = $_POST[""];
$A5 = $_POST["13"];

//Checks if process was triggered by a form submit, if not display an error message
if (isset ($_POST["student_number"])) {
    $student_number = $_POST["student_number"];
}

else {
    //Redirect to form, if process not triggered by a form submit
    header ("location: quiz.html");
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
        $score = $score+1;
    }
}

if (isset ($_POST["question_language"])) {
    $question_language = $_POST["question_language"];
    if ($A2 == $question_language){
        $score = $score+1;
    }
}

if (isset ($_POST["question_suitable"])) {
    $question_suitable = $_POST["question_suitable"];
    if ($A3 == $question_suitable){
        $score = $score+1;
    }
}
    
else {

}

$student_number = sanitise_input($student_number);
$first_name = sanitise_input($first_name);
$last_name = sanitise_input($last_name);
$question_framework = sanitise_input($question_framework);
$question_language = sanitise_input($question_language);
$question_suitable = sanitise_input($question_suitable);

$errMsg = "";

if (is_numeric($student_number)== false) {
    $errMsg .= "<p>Your ID must be a number.</p>";
}
else if ($student_number (1000000 > $student_number) or ((9999999 < $studentId) and ($studentId < 1000000000)) or ($studentId > 9999999999)) {
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
    include_once ("manage.php");
}
?>
</body>
</html>