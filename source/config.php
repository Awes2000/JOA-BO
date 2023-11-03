<?php

/* 
 * This is part of the JOA BO project
 * Copyright (C) 2023 JOA Technologies
 * See the LICENSE file for copying conditions.
 */

try{
    // Create connection
    $conn = new mysqli(
        $_ENV["DB_HOST"],
        $_ENV["DB_USER"], 
        $_ENV["DB_PASSWORD"], 
        $_ENV["DB_NAME"]
    );

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $ex) {
    echo "Database failed";
    $conn = NULL;
}

define("MYSQL", $conn);