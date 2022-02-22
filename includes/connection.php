<?php

$servername = "localhost";
$username = "joseph";
$password = "3057";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$con->query("use jobs");
?>