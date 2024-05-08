<?php
session_start();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$erroruserName = "";
$errorEmail = "";
$errorPassword = "";
$errorPasswordConfirm = "";
$errordob = "";

if (isset($_POST["simple_form"])) {


    $userName = test_input($_POST["user_name"]);

    $email = test_input($_POST["email"]);

    $password = test_input($_POST["password"]);

    $confirmPassword = test_input($_POST["confirmPassword"]);

    $dob = test_input($_POST["dob"]);

    $encrypted = sha1($password);

    if (isset($_POST["checkbox"])) {
        $checkbox = test_input($_POST["checkbox"]);
    }


    // validation
    if (empty($userName)) {
        $erroruserName = "Please fill the input fields";
    }elseif (!preg_match("/^[a-zA-Z-' ]*$/",$erroruserName)) {
        $erroruserName = "Only letters and white space allowed";
    }

    if (empty($email)) {
        $errorEmail = "Please fill the input fields";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = "Invalid email format";
    }

    if (empty($password)) {
        $errorPassword = "Please fill the input fields";
    }elseif(strlen($password) < 6) {
        $errorPassword = "Password should be at least 6 characters";
    }

    if (empty($confirmPassword)) {
        $errorPasswordConfirm = "Please fill the input fields";
    }elseif($password !== $confirmPassword){
        $errorPasswordConfirm = "Password mismatch";
    }

    if (empty($dob)) {
        $errordob = "Please fill the input fields";
    }

    if (empty($erroruserName) && empty($errorEmail) && empty($errorPassword) && empty($errorPasswordConfirm) && empty($errordob)) {
        $location = "display.php";

        $_SESSION['user_name'] = $userName;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['encrypted'] = $encrypted;
        $_SESSION['checkbox'] = $checkbox;
        $_SESSION['success'] = "Form Submitted successfully";
        $_SESSION['datetime'] = date('Y-M-d h:i a');
        $_SESSION['dob'] = $dob;


        header("Location: $location");
        exit; 
    }
}
