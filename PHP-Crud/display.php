<?php
include("connection.php");

$readQuery = "SELECT * FROM client";

$readData =  mysqli_query($conn, $readQuery);

?>