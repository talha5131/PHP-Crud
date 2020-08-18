<?php
include("connection.php");

$name = $_GET['name'];
$email = $_GET['email'];
$phoneNumber = $_GET['phoneNumber'];


$insertQuery = "INSERT INTO `client`(`name`, `email`, `phone_number`)
 VALUES ('$name', '$email', '$phoneNumber')";

mysqli_query($conn, $insertQuery);

header("Location: http://localhost/PHP-Crud/form.php");
?>