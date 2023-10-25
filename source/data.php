<?php
/* 
 * This is part of the JOA BO project
 * Copyright (C) 2023 JOA Technologies
 * See the LICENSE file for copying conditions.
 */

// Load configuration
require_once('../source/config.php');
require_once('../source/dummy.php');

// Check connection
if ($GLOBALS["conn"]->connect_error) {
    die("Connection failed: " . $GLOBALS["conn"]->connect_error);
}

// Used for debugging
//$GLOBALS["conn"]->query("DROP TABLE IF EXISTS music");
//$GLOBALS["conn"]->query("DROP TABLE IF EXISTS users");

// Fetch music
try {
    $music = $GLOBALS["conn"]->query("SELECT * FROM music");
} catch(Exception $e) {

    // Table doesn't exist yet, create it
    $GLOBALS["conn"]->query("CREATE TABLE music (
        artist varchar(35),
        title varchar(25),
        genre varchar(25),
        year varchar(4),
        duration varchar(6),
        image varchar(100)
    )");  

    // Insert dummy data
    foreach ($dummy_data as $song) {
        $prep = $GLOBALS["conn"]->prepare("INSERT INTO music (artist, title, genre, year, duration, image) VALUES (?, ?, ?, ?, ?, ?)");
        $prep->bind_param(
            "ssssss", 
            $song["artist"], 
            $song["title"], 
            $song["genre"], 
            $song["year"], 
            $song["duration"], 
            $song["img"]
        );

        $prep->execute();
    }

    // Now, reSELECT the items
    $music = $GLOBALS["conn"]->query("SELECT * FROM music");
}

/* WIP
function login($username, $password) {
    try {
        $prep = $GLOBALS["conn"]->prepare("SELECT * FROM users WHERE username LIKE ? AND password LIKE ? LIMIT 1");
        $prep->bind_param("ss", $username, $password);
        $result = $prep->execute();

        while($row = $result->fetch_assoc()) {
            echo $row['username'];
        }
    } catch(Exception $e) {
        echo $e;

        // Create table
        $GLOBALS["conn"]->query("CREATE TABLE users (
            username varchar(10),
            password varchar(25)
        )");  

        foreach($dummy_accounts as $user) {
            $prep = $GLOBALS["conn"]->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $prep->bind_param(
                "ss", 
                $user[0],
                $user[1], 
            );
            $prep->execute();
        }
    }
}

login("root", "~=61}:Pp5,:<!GW9WIQ%");
*/