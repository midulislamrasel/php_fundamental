<?php
session_start();
include('dbcom.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendemail_verify($name, $email, $verify_token){
    $mail = new PHPMailer(true);

    // $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.example.com';
    $mail->Username = 'user@example.com';
    $mail->Password = 'secret';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('from@example.com', $name);
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Verify Your Email Address';

    $email_template = "
        <h2>You have registered with Funda of Web IT</h2>
        <h5>Verify your email address to login with the below link</h5>
        <br/><br/>
        <a href='http://localhost:84/mysite/login&registraion/verify-email.php?token=$verify_token'>Click here to verify</a>
    ";

    $mail->Body = $email_template;
    $mail->AltBody = 'Please verify your email address to complete registration.';
    
    try {
        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if(isset($_POST['register_btn'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $verify_token = md5(rand());

    $check_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0){
        $_SESSION['status'] = "Email ID already exists";
        header("location:register.php");
    } else {
        $query = "INSERT INTO users (name, phone, email, address, password, verify_token) VALUES ('$name', '$phone', '$email', '$address', '$password', '$verify_token')";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            sendemail_verify($name, $email, $verify_token);
            $_SESSION['status'] = "Verification email has been sent. Please check your inbox.";
            header("location:register.php");
        } else {
            $_SESSION['status'] = "Registration failed";
            header("location:register.php");
        }
    }
}
?>
