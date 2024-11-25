<?php

$servername = "localhost"; // Database server
$username = "root";        // Database username
$password = "mydatabasepassword!";            // Database password
$dbname = "JIA_Real_Estate"; // Your database name


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>