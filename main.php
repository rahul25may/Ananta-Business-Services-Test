<?php

$servername = "localhost";
$username = "local";
$password = "12345678";
$dbname = "customer_details";

$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: ". $conn->connect_error);
}

?>