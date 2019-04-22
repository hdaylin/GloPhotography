<?php

$errorMSG = "";

// FIRST NAME
if (empty($_POST["firstName"])) {
    $errorMSG = "First name is required ";
} else {
    $firstName = $_POST["firstName"];
}

// LAST NAME
if (empty($_POST["lastName"])) {
    $errorMSG = "Lst Name is required ";
} else {
    $lastName = $_POST["lastName"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required ";
} else {
    $phone = $_POST["phone"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "djhenry94@gmail.com"; //<- Your Email
$Subject = "New Message Gordon Photography"; //<- Your Subject Email

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $firstName;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $lastName;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
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