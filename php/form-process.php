<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

// Location
if (empty($_POST["location"])) {
    $errorMSG .= "Location is required ";
} else {
    $location = $_POST["location"];
}

// Date
if (empty($_POST["date"])) {
    $errorMSG .= "Date is required ";
} else {
    $date = $_POST["date"];
}

if (empty($_POST["fitness"])) {
    $errorMSG .= "field is required ";
} else {
    $fitness = $_POST["fitness"];
}

if (empty($_POST["people"])) {
    $errorMSG .= "field is required ";
} else {
    $people = $_POST["people"];
}

if (empty($_POST["budget"])) {
    $errorMSG .= "field is required ";
} else {
    $budget = $_POST["budget"];
}

$EmailTo = "tailoredtravelsinfo@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Location: ";
$Body .= $location;
$Body .= "\n";
$Body .= "Date: ";
$Body .= $date;
$Body .= "\n";
$Body .= "Fitness: ";
$Body .= $fitness;
$Body .= "\n";
$Body .= "People: ";
$Body .= $people;
$Body .= "\n";
$Body .= "Budget: ";
$Body .= $budget;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>