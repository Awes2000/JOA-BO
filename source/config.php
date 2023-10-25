<?php

/* 
 * This is part of the JOA BO project
 * Copyright (C) 2023 JOA Technologies
 * See the LICENSE file for copying conditions.
 */

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
