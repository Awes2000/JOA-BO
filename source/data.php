<?php
/* 
 * This is part of the JOA BO project
 * Copyright (C) 2023 JOA Technologies
 * See the LICENSE file for copying conditions.
 */

include_once("../source/config.php");

function get_sdgs() {
    $res = MYSQL->query("SELECT * FROM SDG ORDER BY ID")->fetch_all();
    return $res;
}

function get_sdg_by_id($id) {
    $prep = MYSQL->prepare("SELECT * FROM SDG WHERE ID = ?");
    $prep->bind_param("i", $id);
    $prep->execute();

    $res = $prep->get_result();
    return mysqli_fetch_assoc($res);
}