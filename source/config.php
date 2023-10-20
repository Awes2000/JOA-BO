<?php
$servername = "mariadb";
$username = "USER_JOA";
$password = "PASS_JOA";
$dbname = "BO-JOA";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


