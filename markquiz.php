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

function sanitise_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Checks if process was triggered by a form submit, if not display an error message
if (isset ($_POST["studentId"])) {
    $studentId = $_POST["studentId"];
}

else {
    //Redirect to form, if process not triggered by a form submit
    header ("location: quiz.html");
}
//assign the rest of the form values to PHP variables here...
if (isset ($_POST["firstName"])) {
    $firstName = $_POST["firstName"];
}

if (isset ($_POST["lastName"])) {
    $lastName = $_POST["lastName"];
} 

if (isset ($_POST["question_framework"])) {
    $question_framework = $_POST["question_framework"];
}

if (isset ($_POST["question_language"])) {
    $question_language = $_POST["question_language"];
}

if (isset ($_POST["question_suitable"])) {
    $question_suitable = $_POST["question_suitable"];
}
    
else {
    $species = "Unknown species";
}

$tour = array();
if (isset ($_POST["1day"])) {
    array_push($tour, "One-day") ;
}
if (isset ($_POST["4day"])) {
    array_push($tour, "Four-day") ;
}
if (isset ($_POST["10day"])) {
    array_push($tour, "Ten-day") ;
}


$studentId = sanitise_input($studentId);
$firstName = sanitise_input($firstname);
$lastname = sanitise_input($lastname);
$question_framework = sanitise_input($question_framework);
$question_language = sanitise_input($question_language);
$question_suitable = sanitise_input($question_suitable);

$errMsg = "";

if ($firstname=="") {
    $errMsg .= "<p>You must enter your first name.</p>";
}
else if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
    $errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
}
if ($lastname=="") {
    $errMsg .= "<p>You must enter your last name.</p>";
}
else if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
    $errMsg .= "<p>Only alpha letters allowed in your last name.</p>";
}
if (is_numeric($age) == false) {
    $errMsg .= "<p>Your age must be a number.</p>";
}
else if (!preg_match("/^[1][0]|[1-9][1-9]|[1-9][0-9][0-9]|[1-9][0-9][0-9][0-9]|10000*$/",$age)) {
    $errMsg .= "<p>Your age must be between 10 and 10,000.</p>";
}
if ($errMsg != "") {
    echo "<p>$errMsg</p>";
}
else {
    $tours = "";
    $last=array_pop($tour);
    foreach($tour as $tour) {
    $tours = $tours . $tour . " and " ;
    }
    $tours = $tours . $last . " tours. ";

    echo 
        "<p>Welcome $firstname $lastname! <br/>
        You are now booked on the $tours <br/>
        Species: $species<br/>
        Age: $age<br/>
        Meal Preference: $food<br/>
        Number of travellers: $partySize</p>";
}
?>

</body>
</html>