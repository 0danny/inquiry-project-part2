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

}

$studentId = sanitise_input($studentId);
$firstName = sanitise_input($firstname);
$lastname = sanitise_input($lastname);
$question_framework = sanitise_input($question_framework);
$question_language = sanitise_input($question_language);
$question_suitable = sanitise_input($question_suitable);

$errMsg = "";

if (is_numeric($studentId)== false) {
    $errMsg .= "<p>Your ID must be a number.</p>";
}
else if ($studentId (1000000 > $studentId) or ((9999999 < $studentId) and ($studentId < 1000000000)) or ($studentId > 9999999999)) {
    $errMsg .= "<p>Has to be 7 or 10 characters.</p>";
}
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