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
if (isset ($_POST["firstName"])) {
    $firstname = $_POST["firstName"];
}

else {
    //Redirect to form, if process not triggered by a form submit
    header ("location: register.html");
}
//assign the rest of the form values to PHP variables here...
if (isset ($_POST["lastname"])) {
    $lastname = $_POST["lastname"];
}

if (isset ($_POST["age"])) {
    $age = $_POST["age"];
} 

if (isset ($_POST["food"])) {
    $food = $_POST["food"];
}

if (isset ($_POST["partySize"])) {
    $partySize = $_POST["partySize"];
}

if (isset ($_POST["species"])) {
    $species = $_POST["species"];
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


$firstname = sanitise_input($firstname);
$lastname = sanitise_input($lastname);
$species = sanitise_input($species);
$age = sanitise_input($age);
$food = sanitise_input($food);
$partySize = sanitise_input($partySize);

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