<?php

/*
 * Database configuration
 */

// Define envSettings als array
$envSettings = [];

// Checkt of de .env file bestaat
if (file_exists(dirname(__FILE__) . '/.env')) {

    // Parse de ini file, en sla alles op in $envSettings
    $envSettings = parse_ini_file(dirname(__FILE__) . '/.env');
} else {
    die("ERROR: no .env file found");
}

define("DB_NAME", $envSettings["DB_NAME"]);
define("DB_USERNAME", $envSettings["DB_USER"]);
define("DB_PASSWORD", $envSettings["DB_PASSWORD"]);
define("DB_HOST", $envSettings["DB_HOST"]);

// Create connection
define("CONN", new mysqli("db2", DB_USERNAME, DB_PASSWORD, "voorbeeld_db"));