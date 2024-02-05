<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con){
    echo "not connected";
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['number'];
// $message = $_POST['message'];

// $sql = "INSERT INTO `data`(`first name`, `last name`, `email`, `number`, `message`) VALUES ('$firstName','$lastName','$email','$number','$message')";
$sql = "INSERT INTO `data`(`first name`, `last name`, `email`, `number`) VALUES ('$firstName','$lastName','$email','$number')";

$result = mysqli_query($con, $result);

if($result){
    echo "data submitted";
}
else{
    echo "query failed...";
}
?>