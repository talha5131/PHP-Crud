<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "php_crud";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if($conn){
    // echo "DB Connected!!!";
}
else{
    die("Connection Failed Because ".mysqli_connect_error());
}
?>