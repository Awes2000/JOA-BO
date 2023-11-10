<?php

/* 
 * This is part of the JOA BO project
 * Copyright (C) 2023 JOA Technologies
 * See the LICENSE file for copying conditions.
 */

include_once("../source/data.php");

if (!isset($_GET["id"])) {
    die("No 'id' parameter!");
}

var_dump(get_sdg_by_id($_GET["id"]));
